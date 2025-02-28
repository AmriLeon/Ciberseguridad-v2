<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::controller(PublicController::class)->group(function (){
        Route::get('/', 'inicio')->name('inicio');
        Route::get('/contacto', 'contacto')->name('contacto');
        Route::get('/nosotros', 'nosotros')->name('nosotros');
});
