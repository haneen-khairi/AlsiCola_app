<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

/*-------------------------------------------------------------*/
///////////////////// default language is en ////////////////////
/*-------------------------------------------------------------*/
Route::get('/', function () {
    return redirect('/en/home-page');
});
/*-------------------------------------------------------------*/
///////////////////// All Routes For Website ////////////////////
/*-------------------------------------------------------------*/
Route::get('/{lang}/home-page', function () {
    return view('home');
});
 
Route::get('/{lang}/Privacy-Policy', function () {
    return view('privacy');
});

Route::post('/ContactRequest', [ContactController::class, 'storeContactForm'])->name('ContactRequest');
