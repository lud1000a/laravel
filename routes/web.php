<?php

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
use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index'] );
Route::get('/events/create', [EventController::class, 'create'] );

Route::get('/file', function () {
    return view('file');
});

Route::get('/coisa', function () {

    $busca= request('search');
    return view('coisa', ['busca' => $busca]);
});

Route::get('/id/{id?}', function ($id=1) {
    return view('id', ['id' => $id]);
});
