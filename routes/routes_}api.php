<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMessageController;

Route::post('/contacto', [ContactMessageController::class, 'enviarFormularioContacto']);
