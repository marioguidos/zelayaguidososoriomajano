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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/executives',[ExecutiveController::class,'index'])->name('executives.index');
Route::get('/executives/create',[ExecutiveController::class,'create'])->name('executives.create');


