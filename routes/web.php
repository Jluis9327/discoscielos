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
use App\Banner;

Route::get('/', function () {
    //return view('welcome');
    $banner=Banner::find([1,2,3,4,5,6]);
    return view('welcome')->with(compact('banner'));
});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin','AdminController@index');
    Route::get('/admin/banner','AdminController@banner');
    Route::post('/admin/banner','AdminController@up');
    Route::get('/admin/register','AdminController@registerindex');//L
    Route::get('/admin/modify','AdminController@modifyindex');//D
    Route::post('/admin/register','AdminController@register');
    Route::post('/admin/modify','AdminController@modify');
    Route::get('/admin/confirm','AdminController@confirm' );
});
Route::middleware(['auth','recep'])->group(function () {
    Route::get('/recep','RecepController@index'); //se está sacando esta línea de código con el objetivo de que no salga el index y que de frente salga el buscar cliente
    Route::post('/recep/search/','RecepController@search');
    Route::get('/recep/search','RecepController@searchindex');
    Route::get('/recep/register/{id}','RecepController@registerindex');
    Route::post('/recep/register','RecepController@register');
    Route::post('/recep/modify','RecepController@modify');
    Route::get('/recep/zone/{id}','RecepController@zone')->name('recep.zone');
    //Route::post('/recep/zone','RecepController@zone');
    Route::get('/recep/zone/firstlevel/{dni}/day/{date}','RecepController@first');
    Route::post('/recep/zone/firstlevel/reservation','RecepController@firstlevelReserva');
    Route::get('/recep/zone/secondlevel/{dni}/day/{date}','RecepController@seconddayindex');
    Route::post('/recep/zone/secondlevel/{dni}/day/{date}','RecepController@secondday');
    Route::get('/recep/zone/secondlevel/{dni}/day/{date}/confirm','RecepController@confirmindex');

});
Route::middleware(['auth','client'])->group(function () {
    Route::get('/client','ClientController@index');
    Route::get('/client/zone','ClientController@zone');
    Route::get('/client/firstlevel','ClientController@first');
    Route::get('/client/secondlevel','ClientController@second');
});
Auth::routes();

