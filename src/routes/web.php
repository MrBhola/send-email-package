<?php

use Illuminate\Http\Request;
use Mrbhola\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact',[ContactController::class,'send'])->name('contact.store');