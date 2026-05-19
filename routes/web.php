<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/print', [PdfController::class, 'print']);