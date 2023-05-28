<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdditionController;
use App\Http\Controllers\SubtractionController;
use App\Http\Controllers\MultiplicationController;
use App\Http\Controllers\DivisionController;

Route::get('{operation}/{operatorA}/{operatorB}', function ($operation, $operatorA, $operatorB) {
    if ($operation === 'add') {
        return app(AdditionController::class)->calculate($operatorA, $operatorB);
    } elseif ($operation === 'subtract') {
        return app(SubtractionController::class)->calculate($operatorA, $operatorB);
    } elseif ($operation === 'multiply') {
        return app(MultiplicationController::class)->calculate($operatorA, $operatorB);
    } elseif ($operation === 'divide') {
        return app(DivisionController::class)->calculate($operatorA, $operatorB);
    } else {
        return response()->json(['error' => 'Invalid operation'], 400);
    }
});
