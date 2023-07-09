<?php
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProfileController;
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

Route ::get('/',[LayoutController::class, 'home'])->name('home');
Route ::get('user',[LayoutController::class, 'users'])->name('user');
Route ::get('service',[LayoutController::class, 'service'])->name('service');
Route ::get('about',[LayoutController::class, 'about'])->name('about');
// coustom routes end 
require __DIR__.'/auth.php';
