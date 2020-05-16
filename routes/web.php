<?php

//
//Route::get('/admin', 'DashboardController@dashboard');
//Route::post('/admin', 'DashboardController@update_avatar');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/subtask', function () {
    return view('subtask');
})->name('subtask');


Route::get('/contact/all/{id}',
    'ContactController@showOneMessage'
)->name('contact-data-one');

Route::get('/contact/all/{id}/update',
    'ContactController@updateMessage'
)->name('contact-update');

Route::post('/contact/all/{id}/update',
    'ContactController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get('/contact/all/{id}/delete',
    'ContactController@deleteMessage'
)->name('contact-delete');

Route::get('/task/all/{id}',
    'TaskController@showOneTask'
)->name('task-data-one');

Route::get('/task/all/{id}/update',
    'TaskController@updateTask'
)->name('task-update');

Route::post('/task/all/{id}/update',
    'TaskController@updateTaskSubmit'
)->name('task-update-submit');

Route::get('/task/all/{id}/delete',
    'TaskController@deleteTask'
)->name('task-delete');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::post('/subtask/submit', 'TaskController@submit')->name('task-form');
Route::get('/task/all', 'TaskController@allTask')->name('task-data');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');


    Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::post('/', 'DashboardController@update_avatar')->name('admin.index');
Route::group(['prefix'=>'user_managment', 'namespace'=>'UserManagment'], function() {
    Route::resource('/user', 'UserController', ['as' => 'admin.user_managment']);
 });
});

Route::resource('project', 'ProjectController');
Route::resource('objective', 'ObjectiveController');

Route::get('profile', 'Admin\UserManagment\UserController@profile')->name('profile');;
Route::post('profile', 'Admin\UserManagment\UserController@update_avatar');

Route::resource('editor', 'CKEditorController');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
