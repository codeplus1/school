<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
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
    $faculties = Faculty::paginate(5);
    return view('frontend.pages.index',compact('faculties'));
});

Route::get('profile', function () {
    $students = Student::all();
    return view('frontend.pages.profile',compact('students'));
});

// Route::get('/students/create', function () {
//     return view('student.create');
// });

Route::resource('students',StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('books', BookController::class);
Route::resource('faculty', FacultyController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
