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

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/admin/manage-exams', function () {
  return view('admin.pages.manage-exams');
});

Route::get('/admin/manage-questions', function () {
  return view('admin.pages.manage-questions');
});

Route::get('/admin/manage-answers', function () {
  return view('admin.pages.manage-answers');
});
