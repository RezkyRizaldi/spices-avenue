<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * @return string|array<int, string>|null
     */
    protected function title(): string|array|null
    {
        return __('admin.menu_titles.product');
    }

    protected function grid(): Grid
    {
        $grid = new Grid(new Product());

        $grid->column('name', __('admin.name'))->title();
        $grid->column('description', __('admin.description'))->limit()->ucfirst();
        $grid->column('image', __('admin.image'))->display(fn (?string $image) => ! empty($image) ? "<img class='img-thumbnail' src='".asset('storage')."/{$image}' alt='{$this->name}' width='200' height='200' />" : "<img class='img-thumbnail' src='".asset('assets/images/default-image.png')."' alt='{$this->name}' width='200' height='200' />");
        $grid->quickSearch('name', 'description');

        return $grid;
    }

    protected function detail(mixed $id): Show
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('name', __('admin.name'));
        $show->field('slug', __('Slug'));
        $show->field('description', __('admin.description'));
        $show->field('image', __('admin.image'))->unescape()->as(fn (?string $image) => ! empty($image) ? "<img class='img-thumbnail' src='".asset('storage')."/{$image}' alt='{$this->name}' />" : "<img class='img-thumbnail' src='".asset('assets/images/default-image.png')."' alt='{$this->name}' width='200' height='200' />");

        return $show;
    }

    protected function form(): Form
    {
        $form = new Form(new Product());

        $form->text('name', __('admin.name'))->icon('fa-shopping-bag')->autofocus()->rules(['required', 'string', 'max:255']);
        $form->textarea('description', __('admin.description'))->rules(['string', 'nullable']);
        $form->image('image', __('admin.image'))->move('/admin/products')->thumbnail('small')->uniqueName()->removable()->rules(['image', 'nullable']);

        return $form;
    }
}
