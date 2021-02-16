<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::as('api.')->group(function () {
    Route::get('testing', function () {
        return [
            'message' => 'This is a test',
        ];
    })->name('testing.index');
});
