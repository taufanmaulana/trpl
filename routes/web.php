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

// use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/galery', 'HomeController@galery');
Route::get('/galery/{id}', 'HomeController@galeryID');
Route::get('/registrasi', 'UserController@regist');
Route::post('/fotografer/store', 'UserController@fotograferStore');
Route::post('/wisatawan/store', 'UserController@wisatawanStore');

Route::group(['middleware' => ['auth', 'auth.admin']], function () {
    // Route::get('/admin', 'AdminController@index');

    Route::get('kota', 'AdminController@index');
    Route::get('create/new/{id}', 'AdminController@newWisata');
    Route::post('wisata/create', 'AdminController@storeWisata');
    Route::get('kota/{id}', 'AdminController@show');
    Route::get('order', 'AdminController@order');
    Route::post('kota/store', 'AdminController@storeKota');
    // Route::post('wisata/store', 'AdminController@storeWisata');
    Route::get('wisata/hapus/{id}', 'AdminController@deleteWisata');
    Route::get('wisata/update/{id}', 'AdminController@viewUpdateWisata');
    Route::post('wisata/update/', 'AdminController@UpdateWisata');
    Route::get('user/fotografer', 'AdminController@userfotografer');
    Route::get('user/wisata', 'AdminController@userwisata');
    Route::get('terima/{id}', 'AdminController@terimaById');
    Route::get('tolak/{id}', 'AdminController@tolakById');
    Route::get('terima/order/{id}', 'AdminController@terimaOrderById');
    Route::get('tolak/order/{id}', 'AdminController@tolakOrderById');
    Route::get('update/kota/{id}', 'AdminController@viewUpdateKota');
    Route::post('kota/update', 'AdminController@UpdateKota');
});
Route::group(['middleware' => ['auth', 'auth.fotografer']], function () {
    // Route::get('/admin', 'AdminController@index');
    Route::get('/foto', 'FotoController@foto');
    Route::post('/foto/store', 'FotoController@fotoStore');
    Route::post('/foto/update', 'FotoController@fotoUpdate');
    Route::get('/setting/{id}', 'FotoController@setting');
    Route::get('/jobs/{id}', 'FotoController@jobs');
    Route::get('/foto/hapus/{id}', 'FotoController@delete');
});

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/admin', 'AdminController@index');
    Route::get('/portofolio/{id}', 'AdminController@pdf');
    Route::get('/book/{id}', 'OrderController@index');
    Route::get('/price/{id}', 'OrderController@getPrice');
    Route::get('/pesanan/{id}', 'OrderController@order');
    Route::get('/detail/booking/{id}', 'OrderController@show');
    Route::post('/book/store', 'OrderController@bookStore');
    Route::post('/transfer/{id}', 'OrderController@uploadTf');
});
