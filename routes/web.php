<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


//The homepage controller
Route::get("/", [HomeController::class, "index"])->name("home");

//Contact form controller
Route::post("/contact/send", [ContactController::class, "send"])->name("contact.send");
//Route::post("/contact/show", [ContactController::class, "show"])->name("contact.show");