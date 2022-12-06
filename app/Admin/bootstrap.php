<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 *
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 */

use Carbon\Carbon;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Filter;
use Encore\Admin\Show;

Form::forget(['map', 'editor']);
Grid::init(function (Grid $grid) {
    $grid->filter(function (Filter $filter) {
        $filter->disableIdFilter();
        $filter->between('created_at', __('admin.created_at'))->datetime();
    });
});
Show::init(function (Show $show) {
    $show->field('id', __('Id'));
    $show->field('created_at', __('admin.created_at'))->as(fn (string $createdAt) => Carbon::createFromFormat('Y-m-d H:i:s', $createdAt)->format('d F Y'));
    $show->field('updated_at', __('admin.updated_at'))->as(fn (string $updatedAt) => Carbon::createFromFormat('Y-m-d H:i:s', $updatedAt)->format('d F Y'));
});
