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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::POST('/home/actualizar', 'HomeController@actualizar')->name('home.actualizar');

Route::resource('/transactions', 'Transaction\TransactionController');


Route::resource('/userloan', 'UserLoanController');

Route::resource('/loancondition', 'LoanConditionController');

Route::POST('/userloan/change', 'UserLoanController@change')->name('userloan.change');

Route::resource('/localloan', 'LocalLoanController');

Route::resource('/localmessage', 'LocalMessageController');