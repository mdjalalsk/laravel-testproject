<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Models\teacher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// coustom routes start 

Route::get('/', [LayoutController::class, 'home'])->name('home');
Route::get('user', [LayoutController::class, 'users'])->name('user');
Route::get('service/{id}', [LayoutController::class, 'service'])->name('service');
Route::get('about', [LayoutController::class, 'about'])->name('about');
Route::get('blog', [LayoutController::class, 'showblog'])->name('blog');
Route::get('test', [LayoutController::class, 'test'])->name('test');
// coustom routes end 

Route::get('/routeview', function () {
    $name = "jalal";
    $city = "dhaka";
    return view("frontend.route&view", ['uesr' => $name, 'city' => $city]);
});
// teacher single route
// Route::get('teacher', [TeacherController::class, 'ShowTeacher'])->name('teacher');
// Route::get('teacher/{id}', [TeacherController::class, 'delete'])->name('delete');
// Route::get('/addTeacher', [TeacherController::class, 'addTeacherform'])->name('addTeacher');
// Route::post('/addTeacher', [TeacherController::class, 'addTeacherinsert'])->name('insertTeacher');
// Route::get('/editTeacher/{id}', [TeacherController::class, 'editTeacherform'])->name('editTeacherview');
// Route::post('/updateTeacher/{id}', [TeacherController::class, 'updateTeacher'])->name('updateTeacher');

//gourp route for teacher
Route::controller(TeacherController::class)->group(function () {
    Route::get('teacher', 'ShowTeacher')->name('teacher');
    Route::get('teacher/{id}', 'delete')->name('delete');
    Route::get('/addTeacher', 'addTeacherform')->name('addTeacher');
    Route::post('/addTeacher', 'addTeacherinsert')->name('insertTeacher');
    Route::get('/editTeacher/{id}', 'editTeacherform')->name('editTeacherview');
    Route::post('/updateTeacher/{id}', 'updateTeacher')->name('updateTeacher');
});

//customer route for group
Route::controller(CustomerController::class)->group(function () {
  Route::get('showallcustomers','showCustomer')->name(('showallcustomers'));
});
require __DIR__ . '/auth.php';
