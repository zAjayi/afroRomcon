<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//The homepage
Route::get("/", [HomeController::class, "index"])->name("home");
