<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
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

Route::get('/', [DashboardController::class, 'coba'])->name('dashboard');

Route::post('/ideas', [IdeaController::class, 'store'])->name('idea.create');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('idea.show');

Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('idea.edit');

Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('idea.update');

Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');

Route::get('/terms', function(){
    return view('terms');
});