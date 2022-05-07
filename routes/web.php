<?php

use App\Http\Controllers\ExecutiveController;
use App\Models\Executive;
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
    if (auth()->user()) {
        return redirect()->action([ExecutiveController::class, 'index']);
    } else {
        return view('auth.login');
    }
});

Auth::routes();

Route::post('/executi/{id}', [ExecutiveController::class, 'update'])->name('executives.update')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/executives', [ExecutiveController::class, 'index'])->name('executives.index')->middleware('auth');
Route::get('/executives/{executive}/edit', [ExecutiveController::class, 'edit'])->name('executives.edit')->middleware('auth');
Route::get('/executives/create', [ExecutiveController::class, 'create'])->name('executives.create')->middleware('auth');
Route::post('/executives', [ExecutiveController::class, 'store'])->name('executives.store')->middleware('auth');
Route::get('/executives/{executive}/show', [ExecutiveController::class, 'show'])->name('executives.show')->middleware('auth');
Route::delete('executives/{executive}',  [ExecutiveController::class, 'destroy'])->name('executives.destroy')->middleware('auth');
    

