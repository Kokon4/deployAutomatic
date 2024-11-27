<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;

Route::get('/', function () {
    return "Benvingut a la Guia d'Equips de Futbol Femení!";
 });

Route::resource('/equips',EquipController::class);

Route::resource('/estadis',EstadiController::class);



?>