<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "nama" => "Rafa Fausta Muliawan",
        "email" => "rafaspumante@gmail.com",
        "gambar" => "rafa.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view ('gallery',[
        "title" => "Gallery"
    ]);
});

Route::get('/contacts', function(){
    return view ('contacts', [
        "title" => "contacts"
    ]);
});

Route::resource('/contacts', ContactController::class);