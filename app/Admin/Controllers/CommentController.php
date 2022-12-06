<?php

namespace App\Admin\Controllers;

use App\Models\Comment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Displayers\Actions;
use Encore\Admin\Show;
use Encore\Admin\Show\Tools;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentController extends AdminController
{
    /**
     * @return string|array<int, string>|null
     */
    protected function title(): string|array|null
    {
        return __('admin.menu_titles.comment');
    }

    protected function grid(): Grid
    {
        $grid = new Grid(new Comment());

        $grid->column('name', __('admin.name'))->title();
        $grid->column('message', __('admin.message'))->limit()->ucfirst();
        $grid->disableCreateButton();
        $grid->actions(function (Actions $actions) {
            $actions->disableEdit();
        });

        return $grid;
    }

    protected function detail(mixed $id): Show
    {
        $comment = Comment::findOrFail($id)->load([
            'post' => fn (BelongsTo $query) => $query->select('id', 'title', 'slug'),
        ]);
        $show = new Show($comment);

        $show->field('post.title', __('admin.post.name'))->link(route('posts.show', $comment->post->slug));
        $show->field('name', __('admin.name'));
        $show->field('email', __('admin.email'));
        $show->field('website', __('admin.website'))->link();
        $show->field('message', __('admin.message'));
        $show->panel()->tools(function (Tools $tools) {
            $tools->disableEdit();
        });

        return $show;
    }
}
