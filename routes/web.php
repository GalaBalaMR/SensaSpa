<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;

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
    $projects = Project::all();
    return view('welcome', compact('projects'));
});

Route::middleware('isAdmin')->name('admin.')->prefix('admin')->group(function() {
    Route::get('/' , [AdminController::class, 'index'])->name('index');
    Route::resource('/projects' , ProjectController::class);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
