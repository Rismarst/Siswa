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


//mencari semua model
Route::get('/testmodel', function(){
	$query= App\Baru::all();
	return $query;
});

//mencari model berdasarkan id
Route::get('/testmodel1', function(){
	$query= App\Baru::find(1);
	return $query;
});

//mencari model berdasarkan title

Route::get('/testmodel2', function(){
	$query= App\Baru::where('title','like','%cepat nikah%')->get();
	return $query;
});

//mengubah record,(Hapus semua function)
Route::get('/testmodel3', function(){
	$query= App\Baru::find(1);
	$query->title="Ciri Keluarga Sakinah";
	$query->save();
	return $query;
});

Route::get('/siswa', function(){
	$query= App\siswa::all();
	return $query;
});

Route::get('/about', function(){
	return view('about');
});



Route::get('/cth', function(){
	return view('contoh');
});

Route::get('/tgs', function(){
	return view('tugas');
});














