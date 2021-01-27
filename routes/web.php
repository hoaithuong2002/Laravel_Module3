<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::post('/calculator', function (Request $request) {
    dd($request);
    $productDesc = $request->productDesc;
    $listPrice = $request->listPrice;
    $discountPercent = $request->discountPercent;

    $discountAmount = $listPrice * $discountPerce.nt * 0.01;
    $discountPrice = $listPrice - $discountAmount;
    dd($listPrice);
    return view('calculator_display', compact(['productDesc', 'listPrice', 'discountPercent', 'discountAmount', 'discountPrice']));
});


Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/dictionary', function (Request $request) {
    $text = $request->textbox;
    $dictionary = ['text'=>'Văn Bản','name'=>'Tên','dog'=>'chó','cat'=>'mèo'];

    $value= isset($dictionary[$text])?$dictionary[$text] : "khong tim thay";

    return view('dictionary_display', compact(['text','value']));
});

