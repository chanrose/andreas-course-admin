<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('course.home');
Route::get('/view-courses-list', [HomeController::class, 'getList'])->name('course.list');
Route::get('/add-course', [HomeController::class, 'createCourse'])->name('course.addnew');
Route::post('/add-course', [HomeController::class, 'submitCreation'])->name('course.submit');

Route::get('/edit-course/{CID}', [HomeController::class, 'editCourseById'])->name('course.edit');
Route::post('/update-course', [HomeController::class, 'updateCourseById'])->name('course.update');

Route::get('/view-course/{CID}', [HomeController::class, 'getCourseById'])->name('course.getById');

Route::get('/delete-course/{CID}', [HomeController::class, 'deleteCourseById'])->name('course.DeleteById');

