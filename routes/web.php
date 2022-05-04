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
Route::get('/dashboard', function () use ($admin_path) {
    return view("$admin_path.dashboard");
});

//Blogs
Route::get('/blogs', function () use ($admin_path) {
    return view("$admin_path.blogs.list");
});

//Blog Add / Edit
Route::get('/blogs/{path}', function ($state) {
    return view("admin.pages.blogs.$state");
});

//Comments
Route::get('/comments', function () use ($admin_path) {
    return view("$admin_path.blogs.comment.manage");
});
//Comments List/Edit/Reply
Route::get('/comments/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.blogs.comment.$state");
});

//Tags
Route::get('/tags', function () use ($admin_path) {
    return view("$admin_path.blogs.tag.manage");
});
//Tags Edit
Route::get('/tags/edit', function () use ($admin_path) {
    return view("$admin_path.blogs.tag.edit");
});

//Categories
Route::get('/categories', function () use ($admin_path) {
    return view("$admin_path.blogs.category.manage");
});
//Categories Edit
Route::get('/categories/edit', function () use ($admin_path) {
    return view("$admin_path.blogs.category.edit");
});
