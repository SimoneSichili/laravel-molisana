<?php

use Illuminate\Support\Facades\Route;

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

    $data = config("pasta");
    // dd($data);

    $lunghe= [];
    $corte= [];
    $cortissime= [];

    foreach ($data as $pasta) {
        if($pasta["tipo"] == "lunga") {
            $lunghe[] = $pasta;
        } elseif ($pasta["tipo"] == "corta") {
            $corte[] = $pasta;
        } elseif ($pasta["tipo"] == "cortissima") {
            $cortissime[] = $pasta;
        }
    }

    // dd($lunghe, $corte, $cortissime);

    return view('home', [
        "lunghe" => $lunghe,
        "corte" => $corte,
        "cortissime" => $cortissime,
    ]);
})->name("home");


Route::get('/prodotto/{id}', function ($id) {

    $data = config("pasta");
    // dd($id);

    return view('product', [
        "product" => $data[$id],
        "max" => count($data) - 1,
    ]);
})->name("prodotto");
