<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => true]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    Route::POST('addUser','UsersController@addUser');
    Route::POST('editUser','UsersController@editUser');
    Route::POST('deleteUser','UsersController@deleteUser');

    //Course
    Route::resource('course', 'CourseController');
    Route::POST('addCourse','CourseController@addCourse');
    Route::POST('editCourse','CourseController@editCourse');
    Route::POST('deleteCourse','CourseController@deleteCourse');
    Route::get('/course/course-material','CourseMaterialController@index');
   
    //Topics
    Route::resource('/course/topic', 'CourseTopicController');
    Route::POST('course/addTopic','CourseTopicController@addTopic');


    //Tasks
    Route::resource('/course/task', 'TaskController');
    Route::POST('course/addTask','TaskController@addTask');

    //Profile
    Route::get('/profile','AdminController@profile');
    // Route::get('/activity_stream','AdminController@activity_stream');

    Route::resource('customer', 'CustomerController');
    Route::resource('writer', 'WriterController');
    Route::resource('editor', 'EditorController');
    Route::resource('message', 'MessageController');
    Route::get('/activity_stream', 'TaskController@activity_stream');
    Route::get('/notifications', 'MessageController@notifications');
});
