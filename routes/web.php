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

Route::get('/1', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.layout.index');
});
// Route::get('abc', function () {
//     return view('pages/index');
// });


Route::get('/', 'FrontController@member');
Route::get('/news/{id}.html', 'FrontController@news');


Route::get('admin/login', 'UsersController@adminlogin');
Route::post('admin/login', 'UsersController@postadminlogin');
Route::get('admin/logout', 'UsersController@getadminlogout');

Route::group(['prefix' => 'admin', 'middleware'=>'adminlogin'], function () {
    Route::group(['prefix' => 'member'], function () {
        Route::get('list', 'MemberController@getlist');
        Route::get('edit/{id}', 'MemberController@getedit');
        Route::post('edit/{id}', 'MemberController@postedit');
        Route::get('add', 'MemberController@getadd');
        Route::post('add', 'MemberController@postadd');
        Route::get('delete/{id}', 'MemberController@getdelete');
    });
    
    Route::group(['prefix' => 'video'], function () {
        Route::get('list', 'VideoController@index');
        Route::get('edit/{id}', 'VideoController@edit');
        Route::post('update/{id}', 'VideoController@update');
        Route::get('create', 'VideoController@create');
        Route::post('store', 'VideoController@store');
        Route::get('delete/{id}', 'VideoController@getdelete');
    });
    
    Route::group(['prefix' => 'question'], function () {
        Route::get('list', 'QuizController@index');
        Route::get('edit/{id}', 'QuizController@edit');
        Route::post('update/{id}', 'QuizController@update');
        Route::get('add', 'QuizController@create');
        Route::post('store', 'QuizController@store');
        Route::get('delete/{id}', 'QuizController@destroy');
    });
    
    Route::group(['prefix' => 'news'], function () {
        Route::get('list', 'NewsController@index');
        Route::get('edit/{id}', 'NewsController@edit');
        Route::post('update/{id}', 'NewsController@update');
        Route::get('add', 'NewsController@create');
        Route::post('store', 'NewsController@store');
        Route::get('delete/{id}', 'NewsController@destroy');
    });
    
});

Route::get('member', 'FrontController@member');
Route::post('search', 'FrontController@postsearch');
Route::get('/home', function () {
    return view('frontend.layout.index');
});

Route::get('videos/{id}', 'FrontController@videos');
