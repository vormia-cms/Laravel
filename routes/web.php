<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vormia\SettingsController;
use App\Models\Vormia\Setting;

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
Route::view('/', "$admin_path.login");

// Dashboard
Route::view('/vrm-dashboard', "$admin_path.dashboard");

//Blogs
Route::view('/vrm/blogs', "$admin_path.blogs.list");

//Blog Add / Edit
Route::get('/vrm/blogs/{path}', function ($state) {
    return view("admin.pages.blogs.$state");
});

//Comments
Route::view('/vrm/comments', "$admin_path.blogs.comment.manage");

//Comments List/Edit/Reply
Route::get('/vrm/comments/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.blogs.comment.$state");
});

//Tags
Route::view('/vrm/tags', "$admin_path.blogs.tag.manage");

//Tags Edit
Route::get('/vrm/tags/edit', function () use ($admin_path) {
    return view("$admin_path.blogs.tag.edit");
});

//Categories
Route::view('/vrm/categories', "$admin_path.blogs.category.manage");

//Categories Edit
Route::get('/vrm/categories/edit', function () use ($admin_path) {
    return view("$admin_path.blogs.category.edit");
});

//Page
Route::view('/vrm/pages', "$admin_path.pages.list");

//Page Add / Edit
Route::get('/vrm/pages/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.pages.$state");
});

//Inheritances
Route::view('/vrm/inheritances', "$admin_path.inheritances.manage");

//Inheritances Edit
Route::get('/vrm/inheritances/edit', function () use ($admin_path) {
    return view("$admin_path.inheritances.edit");
});

//Shortcodes
Route::view('/vrm/shortcodes', "$admin_path.shortcodes.manage");

//Helpers
Route::view('/vrm/helpers', "$admin_path.helpers.list");

//Helpers Add / Edit
Route::get('/vrm/helpers/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.helpers.$state");
});

//Fields
Route::view('/vrm/fields', "$admin_path.fields.list");

//Helpers Add / Edit
Route::get('/vrm/fields/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.fields.$state");
});

//Users
Route::view('/vrm/users', "$admin_path.users.list");

//Users Add / Edit / View & Profile
Route::get('/vrm/users/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.users.$state");
});

//Access
Route::view('/vrm/access', "$admin_path.access.manage");

//Access Edit
Route::get('/vrm/access/edit', function () use ($admin_path) {
    return view("$admin_path.access.edit");
});

//Fields Type
Route::view('/vrm/fieldtypes', "$admin_path.fieldtypes.list");

//Fields Type Add / Edit
Route::get('/vrm/fieldtypes/{path}', function ($state) use ($admin_path) {
    return view("$admin_path.fieldtypes.$state");
});

//Module List
Route::view('/vrm/controls/module', "$admin_path.controls.module");

//Inheritance List
Route::view('/vrm/controls/inheritance', "$admin_path.controls.inheritance");

//Settings
Route::prefix('vrm-settings')->group(function () {
    Route::controller(SettingsController::class)->group(function () {
        Route::get('/{view}', 'open');

        // Update Settings
        // Route::post('/{view}/{state}',  [SettingsController::class, 'valid']);
        Route::post('/{view}/{state}', [SettingsController::class, 'valid'], 'gif');

        //Route::match(['post', 'put'], '/{state}}',  [SettingsController::class, 'valid']);

        /*

        Route::post('/save', function ($save) {
            //
        });
        */
    });
});
