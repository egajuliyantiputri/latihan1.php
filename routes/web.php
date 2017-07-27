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
Route::get('/about', function () {
	return '<h1>halo</h1>'
	.'selamat datang di webapp saya<br>'
	.'Laravel, emang keren';
});
Route::get('/latihan', function () {
	return view('belajar');
});
Route::get('/satu', function () {
	return view('about.satu');
});
Route::get('/dua', function () {
	return view('about.dua');
});
Route::get('/tiga', function () {
	return view('about.tiga');
});

Route::get('/about/{nama}/{sekolah}/{umur}', function ($a,$b,$c) {
	return 'nama saya : '.$a.'<br>
	saya srekolah di : '.$b.'<br>
	umur saya : '.$c.'<br>';
});

Route::get('/tes/{nama}', function () {
	$a="";
	return 'ini adalah halaman jhon'.$a;
});
