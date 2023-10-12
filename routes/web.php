<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FlightController;
use App\Livewire\Counter;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('show_request', fn(Request $request) => view('show_request', ['request' => $request, 'name' => "Steve"]));

Route::get('flights', [FlightController::class, 'index'])->name('flights.index');
Route::get('flights/delete/{id}', [FlightController::class, 'delete']);
Route::get('flights/edit/{id}', [FlightController::class, 'edit']);
Route::get('flights/create', [FlightController::class, 'create']);
Route::post('flights',  [FlightController::class, 'store']);

Route::get('/counter', Counter::class);
