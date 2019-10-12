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
$groupData = [
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => 'auth'
];

Route::group($groupData, function(){
    $methods = ['index', 'create', 'edit','store', 'update', 'destroy'];
    Route::resource('/blog/posts', 'Blog\PostController')
        ->only($methods)
        ->names('admin.blog.posts');

    Route::resource('/blog/categories', 'Blog\CategoryController')
        ->only($methods)
        ->names('admin.blog.categories');

    Route::resource('/tariff/prices', 'Tariff\PricingController')
        ->only($methods)
        ->names('admin.tariff.prices');

    Route::resource('/tariff/gifts', 'Tariff\GiftController')
        ->only($methods)
        ->names('admin.tariff.gifts');
});




