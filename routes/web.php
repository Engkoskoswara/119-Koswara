<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route :: get ("/barang/{id}", function ($id){
    $barang =[
        [
        "id" => 1,
        "nama" => "buku",
        "harga" =>2000
    ],[
        "id" =>2,
        "nama" =>"pulpen",
        "harga" =>4000
    ]
    ]

});
