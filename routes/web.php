<?php

use Illuminate\Support\Facades\Route;

Route::get('/',\App\Livewire\Index::class)->name('home');
Route::get('/teams',\App\Livewire\Teams::class)->name('teams');
Route::get('/games',\App\Livewire\Games::class)->name('games');
Route::get('/schedule',\App\Livewire\Schedule::class)->name('schedule');
