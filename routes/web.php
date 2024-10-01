<?php

use Illuminate\Support\Facades\Route;
use Simcha22\ImagePackage\Http\Controllers\ImageController;

Route::resource('image', ImageController::class);
