<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CommentController;

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




Route::prefix('users')->group(function(){
Route::get('/', [UserController::class, 'index'])->name('users-index');
Route::get('/create', [UserController::class, 'create'])->name('users-create');
Route::post('/', [UserController::class, 'store'])->name('users-store');
Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users-edit');
Route::put('/{id}', [UserController::class, 'update'])->name('users-update');
Route::delete('/{id}', [UserController::class, 'delete'])->name('users-delete');

});

Route::get('/', function () {
    return view('welcome');

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
