<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Models\Nasabah;

Route::get('/', function () {
    return view('app');
});

Route::get('/angsuran', function () {
    return view('angsuran');
});

Route::get('/nasabah', function () {
    $nasabah = Nasabah::all();
    return view('nasabah', ['nasabah' => $nasabah]);
});