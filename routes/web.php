<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

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

Route::get('/', 'HomeController@index');
Route::get('/login', 'Home@login');
Route::get('/admin', 'Admin@index');
Route::get('/admin/dashboard', 'Admin@index');
Route::get('/admin/daftar', 'Admin@daftar');
Route::post('/admin/daftar', 'Admin@store');
Route::post('/admin/info', 'DatasController@store');
Route::get('/admin/info', 'DatasController@index');
Route::get('/admin/info/data/{$data}', 'DatasController@show');
Route::get('/anime/{slug}', 'HomeController@show');
Route::get('/tags', 'HomeController@tags');

route::get('/testes', 'Admin@cek');
Route::get('/tags/{slug}','HomeController@tag');

route::get('/admin/edit/{slug}', 'Admin@edit');
