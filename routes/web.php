<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$admin_path = "admin/pages";

// Login
Route::get('/', function () use ($admin_path) {
    return view("$admin_path.login");
});

// Dashboard
Route::get('/vrm/dashboard', function () use ($admin_path) {
    return view("$admin_path.dashboard");
});

//Blogs
Route::get('/vrm/blogs', function () use ($admin_path) {
    return view("$admin_path.blogs.list");
});

//Blog Add / Edit
Route::get('/vrm/blogs/{path}', function ($state) {
    return view("admin.pages.blogs.$state");
});

//Comments
Route::get('/vrm/comments', function () use ($admin_path) {
    return view("$admin_path.blogs.comment.manage");
});
//Comments List/Edit/Reply
Route::get('/vrm/comments/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.blogs.comment.$state");
});

//Tags
Route::get('/vrm/tags', function () use ($admin_path) {
    return view("$admin_path.blogs.tag.manage");
});
//Tags Edit
Route::get('/vrm/tags/edit', function () use ($admin_path) {
    return view("$admin_path.blogs.tag.edit");
});

//Categories
Route::get('/vrm/categories', function () use ($admin_path) {
    return view("$admin_path.blogs.category.manage");
});
//Categories Edit
Route::get('/vrm/categories/edit', function () use ($admin_path) {
    return view("$admin_path.blogs.category.edit");
});

//Page
Route::get('/vrm/pages', function () use ($admin_path) {
    return view("$admin_path.pages.list");
});
//Page Add / Edit
Route::get('/vrm/pages/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.pages.$state");
});

//Inheritances
Route::get('/vrm/inheritances', function () use ($admin_path) {
    return view("$admin_path.inheritances.manage");
});
//Inheritances Edit
Route::get('/vrm/inheritances/edit', function () use ($admin_path) {
    return view("$admin_path.inheritances.edit");
});

//Shortcodes
Route::get('/vrm/shortcodes', function () use ($admin_path) {
    return view("$admin_path.shortcodes.manage");
});

//Helpers
Route::get('/vrm/helpers', function () use ($admin_path) {
    return view("$admin_path.helpers.list");
});
//Helpers Add / Edit
Route::get('/vrm/helpers/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.helpers.$state");
});

//Fields
Route::get('/vrm/fields', function () use ($admin_path) {
    return view("$admin_path.fields.list");
});
//Helpers Add / Edit
Route::get('/vrm/fields/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.fields.$state");
});

//Users
Route::get('/vrm/users', function () use ($admin_path) {
    return view("$admin_path.users.list");
});
//Users Add / Edit / View & Profile
Route::get('/vrm/users/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.users.$state");
});

//Access
Route::get('/vrm/access', function () use ($admin_path) {
    return view("$admin_path.access.manage");
});
//Access Edit
Route::get('/vrm/access/edit', function () use ($admin_path) {
    return view("$admin_path.access.edit");
});

//Fields Type
Route::get('/vrm/fieldtypes', function () use ($admin_path) {
    return view("$admin_path.fieldtypes.list");
});
//Fields Type Add / Edit
Route::get('/vrm/fieldtypes/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.fieldtypes.$state");
});

//Module List
Route::get('/vrm/modules', function () use ($admin_path) {
    return view("$admin_path.modules.module");
});
//Inheritance List
Route::get('/vrm/modules/inheritance', function () use ($admin_path) {
    return view("$admin_path.modules.inheritance");
});

//Settings
Route::get('/vrm/settings/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.settings.$state");
});
