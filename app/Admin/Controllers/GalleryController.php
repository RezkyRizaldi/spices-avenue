<?php

namespace App\Admin\Controllers;

use App\Http\Traits\BaseTrait;
use App\Models\Gallery;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GalleryController extends AdminController
{
    use BaseTrait;

    /**
     * @return string|array<int, string>|null
     */
    protected function title(): string|array|null
    {
        return __('admin.menu_titles.gallery');
    }

    protected function grid(): Grid
    {
        $grid = new Grid(new Gallery());

        $grid->column('name', __('admin.name'));
        $grid->column('image', __('admin.image'))->lightbox(['zooming' => true, 'class' => ['thumbnail', 'rounded']])->default("<img class='img img-thumbnail img-thumbnail' src='".asset('assets/images/default-image.png')."' width='200' height='200' />");
        $grid->quickSearch('name');

        return $grid;
    }

    protected function detail(mixed $id): Show
    {
        $show = new Show(Gallery::findOrFail($id));

        $show->field('name', __('admin.name'));
        $show->field('image', __('admin.image'))->unescape()->as(fn (?string $image) => ! empty($image) ? "<img class='img-thumbnail' src='".asset('storage')."/{$image}' />" : "<img class='img-thumbnail' src='".asset('assets/images/default-image.png')."' />");

        return $show;
    }

    protected function form(): Form
    {
        $form = new Form(new Gallery());

        $form->text('name', __('admin.name'))->icon('fa-picture-o')->autofocus()->rules(['required', 'string', 'max:255']);
        $form->image('image', __('admin.image'))->move('/admin/galleries')->thumbnail('small')->uniqueName()->removable()->rules(['image', 'nullable']);
        // $form->saving(function (Form $form) {
        //     if (!is_string($form->image)) {
        //         $this->resizeImage($form->image, 'galleries');
        //     }
        // });

        return $form;
    }
}
