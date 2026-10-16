<?php

use App\Http\Controllers\MateriaController;

Route::get('/', function () {
    return redirect()->route('materias.index');
});

Route::resource('materias', MateriaController::class);