<?php
use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login'); 
});

Route::resource('pais',PaisController::class)->middleware('auth');
Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [PaisController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [PaisController::class, 'index'])->name('home');
});
