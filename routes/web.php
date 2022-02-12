<?php

use Illuminate\Support\Facades\Route;

Route::get('/'                  , 'IndexController@index');
Route::get('درباره-ما'          , 'AboutController@index');
Route::get('تماس-باما'          , 'ContactController@index');
Route::get('سورت-سنگ'           , 'SortController@index');
Route::get('پروژه'              , 'ProjectController@index');
Route::get('پروژه/{slug}'       , 'ProjectController@singleproject');

Route::get('سنگ-ایرانی'         , 'ProductController@irani');
Route::get('سنگ-ایرانی/{slug}'  , 'ProductController@singleirani');

Route::get('سنگ-خارجی'          , 'ProductController@khareji');
Route::get('سنگ-خارجی/{slug}'   , 'ProductController@singlekhareji');

Route::get('محصولات/{slug}'      , 'ProductController@singleproduct');

Route::get('مجله-سنگ'           , 'BlogController@index');
Route::get('مجله-سنگ/{slug}'    , 'BlogController@singleblog');

Auth::routes();

Route::group(['namespace' => 'Admin' , 'prefix' => 'admin'],function (){

    Route::resource('panel'             , 'PanelController');
    Route::resource('menus'             , 'MenuController');
    Route::resource('categories'        , 'CategoriesController');
    Route::resource('slides'            , 'SlideController');
    Route::resource('submenus'          , 'SubmenuController');
    Route::resource('users'             , 'UserController');
    Route::resource('projects'          , 'ProjectController');
    Route::resource('blogs'             , 'BlogController');
    Route::resource('portfos'           , 'SlideController');
    Route::resource('products'          , 'ProductController');
    Route::post('/blog/action'            , 'BlogController@action')->name('blog.action');
    Route::post('/product/action'         , 'ProductController@action')->name('product.action');
    Route::post('/product/option'         , 'ProductController@option')->name('option');
    Route::post('/project/action'         , 'ProjectController@action')->name('project.action');
    Route::post('/slide/action'           , 'SlideController@action')->name('slide.action');
    Route::resource('permissions'       , 'PermissionController');
    Route::resource('roles'             , 'RoleController');
    Route::resource('levelAdmins'       , 'LevelManageController');
    Route::resource('profile'           , 'ProfileController');
    Route::resource('menudashboards'    , 'MenudashboardController');
    Route::resource('submenudashboards' , 'SubmenudashboardController');

});
