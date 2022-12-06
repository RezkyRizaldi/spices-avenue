<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * @return string|array<int, string>|null
     */
    protected function title(): string|array|null
    {
        return __('admin.menu_titles.category');
    }

    protected function grid(): Grid
    {
        $grid = new Grid(new Category());

        $grid->column('name', __('admin.name'))->title();
        $grid->quickSearch('name');

        return $grid;
    }

    protected function detail(mixed $id): Show
    {
        $show = new Show(Category::findOrFail($id));

        $show->field('name', __('admin.name'));
        $show->field('slug', __('admin.slug'));

        return $show;
    }

    protected function form(): Form
    {
        $form = new Form(new Category());

        $form->text('name', __('admin.name'))->rules(['required', 'string', 'max:255']);

        return $form;
    }
}
