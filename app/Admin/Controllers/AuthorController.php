<?php

namespace App\Admin\Controllers;

use App\Http\Traits\BaseTrait;
use App\Models\Author;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AuthorController extends AdminController
{
    use BaseTrait;

    /**
     * @return string|array<int, string>|null
     */
    protected function title(): string|array|null
    {
        return __('admin.menu_titles.author');
    }

    protected function grid(): Grid
    {
        $grid = new Grid(new Author());

        $grid->column('name', __('admin.name'))->title();
        $grid->column('image', __('admin.profile_picture'))->display(fn (?string $image) => !empty($image) ? "<img class='img-thumbnail' src='" . asset('storage') . "/{$image}' alt='{$this->name}' width='200' height='200' />" : "<img class='img-thumbnail' src='" . asset('assets/images/default-pfp.png') . "' alt='{$this->name}' width='200' height='200' />");
        $grid->quickSearch('name');

        return $grid;
    }

    protected function detail(mixed $id): Show
    {
        $show = new Show(Author::findOrFail($id));

        $show->field('name', __('admin.name'));
        $show->field('slug', __('admin.slug'));
        $show->field('image', __('admin.profile_picture'))->unescape()->as(fn (?string $image) => !empty($image) ? "<img class='img-thumbnail' src='" . asset('storage') . "/{$image}' alt='{$this->name}' width='200' height='200' />" : "<img class='img-thumbnail' src='" . asset('assets/images/default-pfp.png') . "' alt='{$this->name}' width='200' height='200' />");

        return $show;
    }

    protected function form(): Form
    {
        $form = new Form(new Author());

        $form->text('name', __('admin.name'))->autofocus()->rules(['required', 'string', 'max:255']);
        $form->image('image', __('admin.profile_picture'))->move('admin/authors')->thumbnail('small')->uniqueName()->removable()->rules(['image', 'nullable']);
        $form->saving(function (Form $form) {
            if (!is_string($form->image)) {
                $this->resizeImage($form->image, 'authors', 150, 150);
            }
        });

        return $form;
    }
}
