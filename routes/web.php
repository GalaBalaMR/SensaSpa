<?php

use App\Models\Content;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
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

    // Cache for content
    // After updating remove this in boot function in contentcontroller
    $contents = Cache::rememberForever('contents', function(){
        return Content::all();
    });
    return view('welcome', compact('projects', 'contents'));
});

Route::get('/ochrana-osobnych-udajov', function(){
    return view('ochr-os-ud');
})->name('ochrana-osobnych-udajov');

Route::middleware('isAdmin')->name('admin.')->prefix('admin')->group(function() {
    Route::get('/' , [AdminController::class, 'index'])->name('index');
    Route::resource('/projects' , ProjectController::class);
    Route::resource('/contents', ContentController::class);
});

Route::post('/infomail', [MailController::class, 'infomail'])->name('infomail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::any('/register', function() {
    return  view('auth.register');
});

require __DIR__.'/auth.php';
