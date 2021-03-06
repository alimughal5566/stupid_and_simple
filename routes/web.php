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

    Route::group(['stupid-and-simple'],function () {

        Route::get('/', function () {return view('welcome');});

        Auth::routes();

        Route::get('/home', 'HomeController@index')->name('home');




        Route::group(['Public'],function () {


            Route::post('login', 'Auth\LoginController@login')->name('login');

                Route::group(['FrontendController'],function () {

                    Route::get('index', 'FrontendController@index')->name('index');
                    Route::get('main-page', 'FrontendController@main')->name('mainPage');
                    Route::post('get-data', 'FrontendController@getData')->name('getData');


                });
        });


        Route::group(['Private'],function () {


            Route::group(['middleware'=>'auth'],function (){

                    Route::group(['AdmindashController'],function () {

                        Route::get('/admin-dash', 'AdmindashController@admindash')->name('admindash');
                        Route::get('/view-data/{id}', 'AdmindashController@showData')->name('showData');
                        Route::get('/edit-data-form/{id}', 'AdmindashController@showEditFormData')->name('showEditFormData');
                        Route::post('/edit-data', 'AdmindashController@edit')->name('edit');
                        Route::get('/get-report', 'AdmindashController@getReport')->name('getReport');
                        Route::get('/print-report', 'AdmindashController@printReport')->name('printReport');
                    });


            });
        });



    });


