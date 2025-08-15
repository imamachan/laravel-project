<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todo;

Route::get('/todos', function () {
    return Todo::all();
});
