<?php

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

// Verify is false because default route are not working...See below
Auth::routes(['register' => false, 'verify' => false]);

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// This route is provided via Post in \Illuminate\Routing\Route::emailVerification() and it breaks
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', [ 'as' => 'bills.list', 'uses' => 'HomeController@index']);
    Route::resource('/bills', 'BillController');
    Route::get('/chart', 'ChartController@index')->name('chart');
});
