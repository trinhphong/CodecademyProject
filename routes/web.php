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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('client.home');
Route::get('/lessons/{lesson}/tasks/','TaskController@index')->name('client.task.show');
Route::get('/lessons/{lesson}/tasks/{taskID}','TaskController@showNext')->name('client.task.showNext');
Route::post('/task/check','TaskController@check')->name('task.check');

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/course/show','AdminController@showCourse')->name('admin.course.show');
    Route::get('/course/{course}/chapter/','AdminController@showChapter')->name('admin.chapter.show');
    Route::get('/course/{course}/chapter/{chapter}/lesson/','AdminController@showLesson')->name('admin.lesson.show');
    Route::get('/course/{course}/chapter/{chapter}/lesson/{lesson}/task','AdminController@showTask')->name('admin.task.show');
    ROute::get('/course/{course}/chapter/{chapter}/lesson/{lesson}/task/{task}','AdminController@showInstruction')->name('admin.instruction.show');
    Route::resource('course','CourseController');
    Route::resource('chapter','ChapterController');
    Route::resource('lesson','LessonController');
    Route::resource('task','AdminTaskController');
    Route::resource('instruction','AdminInstructionController');
    Route::get('/lesson/create/{chapterID}', 'LessonController@createWithChapterID')->name('lesson.create.id');
    Route::get('/task/create/{lessonID}', 'AdminTaskController@createWithLessonID')->name('task.create.id');
    Route::get('/instruction/create/{taskID)','AdminInstructionController@createWithTaskID')->name('instruction.create.id');

    Route::get('/auth/show','AdminController@showAuth')->name('admin.auth.show');

    Route::get('/super/admin/show','AdminController@showAdmin')->name('super.admin.show');
    Route::get('/super/admin/create','AdminController@create')->name('super.admin.create');
    Route::post('/super/admin','AdminController@store')->name('super.admin.store');
    Route::delete('/super/admin/{admin}','AdminController@destroy')->name('super.admin.destroy');

    Route::get('/user/show','AdminController@showUser')->name('admin.user.show');
    Route::delete('/admin/{user}','AdminController@destroyUser')->name('admin.user.destroy');
});


Route::get('auth/facebook', ['as' => 'auth/facebook', 'uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback',['as' => 'auth/facebook/callback', 'uses' => 'Auth\LoginController@handleProviderCallback']);
