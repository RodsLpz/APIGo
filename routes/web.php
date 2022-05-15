<?php
use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\EventController;

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
//Route::post('/calendar', 'EventController@store');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
    Route::get('/', function ()
     {
        return view('auth/login');
     });

    Route::get('/places', function () 
    {
         return view('places');
    });

Route::get('/delete/{id}', ['uses' => 'App\Http\Controllers\DashboardController@delete', 'as' => 'delete']);
Route::get('/delete/{id}', ['uses' => 'App\Http\Controllers\EventController@delete', 'as' => 'delete']);
Route::resource('/calendar', 'App\Http\Controllers\EventController')->middleware('auth');

Route::get('/data', 'App\Http\Controllers\EventController@data')->middleware('auth');
Route::resource('/dashboard', 'App\Http\Controllers\DashboardController')->middleware('auth');
