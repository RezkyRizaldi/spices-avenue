<?php

namespace Database\Seeders;

use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Administrator::truncate();
        Administrator::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'name' => 'Administrator',
        ]);
        Role::truncate();
        Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator',
        ]);
        Administrator::first()->roles()->save(Role::first());
        Permission::truncate();
        Permission::insert([
            [
                'name' => 'All permission',
                'slug' => '*',
                'http_method' => '',
                'http_path' => '*',
            ],
            [
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'http_method' => 'GET',
                'http_path' => '/',
            ],
            [
                'name' => 'Login',
                'slug' => 'auth.login',
                'http_method' => '',
                'http_path' => "/auth/login\r\n/auth/logout",
            ],
            [
                'name' => 'User setting',
                'slug' => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path' => '/auth/setting',
            ],
            [
                'name' => 'Auth management',
                'slug' => 'auth.management',
                'http_method' => '',
                'http_path' => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
            ],
        ]);
        Role::first()->permissions()->save(Permission::first());
        Menu::truncate();
        Menu::insert([
            [
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
            ],
            [
                'parent_id' => 1,
                'order' => 1,
                'title' => __('admin.menu_titles.author'),
                'icon' => 'fa-user-md',
                'uri' => '/authors',
            ],
            [
                'parent_id' => 1,
                'order' => 2,
                'title' => __('admin.menu_titles.category'),
                'icon' => 'fa-list-ul',
                'uri' => '/categories',
            ],
            [
                'parent_id' => 1,
                'order' => 3,
                'title' => __('admin.menu_titles.comment'),
                'icon' => 'fa-comments',
                'uri' => '/comments',
            ],
            [
                'parent_id' => 1,
                'order' => 4,
                'title' => __('admin.menu_titles.gallery'),
                'icon' => 'fa-picture-o',
                'uri' => '/galleries',
            ],
            [
                'parent_id' => 1,
                'order' => 5,
                'title' => __('admin.menu_titles.post'),
                'icon' => 'fa-pencil',
                'uri' => '/posts',
            ],
            [
                'parent_id' => 1,
                'order' => 6,
                'title' => __('admin.menu_titles.product'),
                'icon' => 'fa-shopping-bag',
                'uri' => '/products',
            ],
            [
                'parent_id' => 1,
                'order' => 7,
                'title' => __('admin.menu_titles.team'),
                'icon' => 'fa-users',
                'uri' => '/teams',
            ],
            [
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
            ],
            [
                'parent_id' => 9,
                'order' => 9,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
            ],
            [
                'parent_id' => 9,
                'order' => 10,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
            ],
            [
                'parent_id' => 9,
                'order' => 11,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
            ],
            [
                'parent_id' => 9,
                'order' => 12,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
            ],
            [
                'parent_id' => 9,
                'order' => 13,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
            ],
        ]);
        Menu::find(2)->roles()->save(Role::first());
    }
}
