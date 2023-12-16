<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Dashboard', ['title' => 'Já vejo a galera indo a loucura com está Stack']);
});
