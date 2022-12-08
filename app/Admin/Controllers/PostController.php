<?php

namespace App\Admin\Controllers;

use App\Http\Traits\BaseTrait;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class PostController extends AdminController
{
    use BaseTrait;

    /**
     * @return string|array<int, string>|null
     */
    protected function title(): string|array|null
    {
        return __('admin.menu_titles.post');
    }

    protected function grid(): Grid
    {
        $grid = new Grid(new Post());

        $grid->column('title', __('admin.title'))->title();
        $grid->column('image', __('admin.image'))->display(fn (?string $image) => !empty($image) ? "<img class='img-thumbnail' src='" . asset('storage') . "/{$image}' alt='{$this->title}' width='200' height='200' />" : "<img class='img-thumbnail' src='" . asset('assets/images/default-image.png') . "' alt='{$this->title}' width='200' height='200' />");
        $grid->column('excerpt', __('admin.excerpt'))->display(fn (string $excerpt) => $excerpt)->limit()->ucfirst();
        $grid->column('published_at', __('admin.published_at'));
        $grid->quickSearch('title', 'excerpt', 'body');

        return $grid;
    }

    protected function detail(mixed $id): Show
    {
        $show = new Show(Post::findOrFail($id));

        $show->field('category.name', __('admin.category.name'));
        $show->field('author.name', __('admin.author.name'));
        $show->field('title', __('admin.title'));
        $show->field('slug', __('admin.slug'));
        $show->field('image', __('admin.image'))->unescape()->as(fn (?string $image) => !empty($image) ? "<img class='img-thumbnail' src='" . asset('storage') . "/{$image}' alt='{$this->title}' width='200' height='200' />" : "<img class='img-thumbnail' src='" . asset('assets/images/default-image.png') . "' alt='{$this->title}' width='200' height='200' />");
        $show->field('excerpt', __('admin.excerpt'))->unescape();
        $show->field('body', __('admin.body'))->unescape();
        $show->field('published_at', __('admin.published_at'));

        return $show;
    }

    protected function form(): Form
    {
        $form = new Form(new Post());

        $form->select('category_id', __('admin.category.name'))->options(Category::all()->pluck('name', 'id'))->rules(['required', 'integer']);
        $form->select('author_id', __('admin.author.name'))->options(Author::all()->pluck('name', 'id'))->rules(['required', 'integer']);
        $form->text('title', __('admin.title'))->autofocus()->rules(['required', 'string', 'max:255']);
        $form->image('image', __('admin.image'))->move('admin/posts')->thumbnail('small')->uniqueName()->removable()->rules(['image', 'nullable']);
        $form->hidden('excerpt');
        $form->summernote('body', __('admin.body'))->rules(['required', 'string']);
        $form->saving(function (Form $form) {
            if (!is_string($form->image)) {
                $this->resizeImage($form->image, 'posts');
            }

            $form->excerpt = Str::words(strip_tags($form->body), 20, '');
        });

        return $form;
    }
}
