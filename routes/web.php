<?php

use App\Livewire\BasicForm;
use App\Livewire\ContactForm;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::get('basic', BasicForm::class);

Route::get('contact', ContactForm::class);
