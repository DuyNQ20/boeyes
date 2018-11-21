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

Route::get('demo/{ngay}', function ($ngay) {
    echo $ngay;
});



// Điều hướng
Route::get('hihi', function () {
    echo "Xin chao cac ban, day la trang dieu huong";
})->name('MyRoute2');

Route::get('dieuhuong', function(){
	return redirect()->route('MyRoute2');
});


// group
Route::group(['prefix'=>'MyGroup'], function () {
	
	Route::get('user1', function () {
    	echo "user1";
	});
	Route::get('user2', function () {
    	echo "user2";
	});

});
