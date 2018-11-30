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

Route::get('/home', 'HomeController@dashboard')->name('dashboard');
//admin
Route::get('/profilAdmin', 'admin@profil')->name('profilAdmin');
Route::get('/metod', 'admin@metodBayarAdmin')->name('metod');
Route::get('/bayar', 'admin@dataBayarAdmin')->name('bayar');
Route::get('/userPenyediaJasa', 'admin@userPenyedia')->name('userPenyediaJasa');
Route::get('/userCostumer', 'admin@userPenyewa')->name('userCostumer');
Route::post('/updateProfil/{id}', 'admin@updateProfil')->name('updateProfil');
Route::post('/updatePassword/{id}', 'admin@updatePassword')->name('updatePassword');
Route::get('/viewKesenianAdmin', 'admin@viewKesenian')->name('viewKesenianAdmin');

//penyedia
Route::get('/profilPenyedia', 'penyedia@profil')->name('profilPenyedia');
Route::get('/viewKesenian', 'penyedia@viewKesenian')->name('viewKesenian');
Route::get('/formKesenian/{id}', 'penyedia@formKesenian')->name('formKesenian');

Route::post('/updateProfil/{id}', 'penyedia@updateProfil')->name('updateProfil');
Route::post('/updatePassword/{id}', 'penyedia@updatePassword')->name('updatePassword');
//penyewa
Route::get('/profilPenyewa', 'penyewa@profil')->name('profilPenyewa');
Route::post('/updateProfil/{id}', 'penyewa@updateProfil')->name('updateProfil');
Route::post('/updatePassword/{id}', 'penyewa@updatePassword')->name('updatePassword');
Route::get('/viewKesenianPenyewa', 'penyewa@viewKesenian')->name('viewKesenianPenyewa');
//daftarSeni
Route::get('/formKesenianTambah', 'daftarSeniController@show')->name('formKesenianTambah');
Route::get('/formKesenian/{id}', 'daftarSeniController@view')->name('formKesenian');
Route::post('create', 'daftarSeniController@create')->name('create');
Route::get('/verifAdmin/{id}', 'daftarSeniController@viewAdmin')->name('verifAdmin');
Route::get('/sewaSeni/{id}', 'daftarSeniController@viewPenyewa')->name('sewaSeni');
Route::get('/lanjutTransaksi/{id}', 'daftarSeniController@viewTransaksi')->name('lanjutTransaksi');
Route::post('/updateKesenian/{id}', 'daftarSeniController@updateKesenian')->name('updateKesenian');
Route::post('/updateVerif/{id}', 'daftarSeniController@updateVerif')->name('updateVerif');

Route::post('/transaksi/{id}', 'Cpemesanan@create')->name('transaksi');

Route::resource('daftarSeni','daftarSeniController',['only'=> 'index','show']);
Route::group(['middleware'=>'auth'],function()
{
	Route::resource('daftarSeni','daftarSeniController',['except'=> 'index','show']);
});