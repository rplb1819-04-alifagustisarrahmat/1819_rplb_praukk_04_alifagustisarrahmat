<?php

use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('authentication.login');
// });

Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('petugas', 'UsersController@index');
Route::get('tambah', 'PetugasController@create');
Route::get('detail', 'PetugasController@show');
Route::get('edit', 'PetugasController@edit');

Route::get('masyarakat', 'MasyarakatController@index');
Route::get('detail', 'MasyarakatController@show');

Route::get('aduan', 'AduanController@index');
Route::get('detail', 'AduanController@show');

Route::get('laporan', 'LaporanController@index');