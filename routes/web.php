<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('home');
})->name('accueil');



Route::get('/contact', function () {
return view('contact');
})->name('contact');



Route::post('/thanks', function (Request $request) {
    $data = $request->all();
return view('thankyou',$data);
})->name('thanks');


