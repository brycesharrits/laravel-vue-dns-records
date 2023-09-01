<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DnsLookupController;


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

// Route::get('/dns', function () {
//     return view('dns');
// });
// Route::post('/api/lookup', 'DnsLookupController@lookup');
Route::post('/dns', [DnsLookupController::class, 'lookup']);


// Route::get('/vue-router/{any}', function () {
//     return view('layouts.app');
// })->where('any', '.*');
