<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/dos', function () {
    return view('dos');
});
