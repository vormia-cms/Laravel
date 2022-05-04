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
