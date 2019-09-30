<?php

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

Route::get('/', function () {
    return view('hosting/index');
});
Route::get('/blog', function () {
    return view('hosting/blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin.Blog.
Route::get('admin/blog/dashboard', 'Admin\Blog\DashboardController@index')->name('admin.blog.dashboard');

$groupData = [
    'namespace' => 'Admin\Blog',
    'prefix' => 'admin/blog',
    'middleware' => 'auth'
];

Route::group($groupData, function(){
    $methods = ['index', 'create', 'edit','store', 'update', 'destroy'];
    Route::resource('posts', 'PostController')
        ->only($methods)
        ->names('admin.blog.posts');

    Route::resource('categories', 'CategoryController')
        ->only($methods)
        ->names('admin.blog.categories');
});


