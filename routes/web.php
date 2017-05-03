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

Route::get('/home', 'HomeController@index');
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
    Route::resource('course','CourseController');
    Route::resource('chapter','ChapterController');
    Route::resource('lesson','LessonController');
    Route::resource('task','AdminTaskController');
    Route::get('/lesson/create/{chapterID}', 'LessonController@createWithChapterID')->name('lesson.create.id');
    Route::get('/task/create/{lessonID}', 'AdminTaskController@createWithLessonID')->name('task.create.id');
});
