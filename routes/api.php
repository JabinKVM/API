<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/user', action: function (Request $request): mixed{
    return $request->user();
})->middleware(middleware: 'auth:sanctum');

Route::get(uri: '/hello', action: function (): JsonResponse {
    return response()->json(data: [
        'message' => 'Hello World',
    ]);
});


// Simple CRUD of API
//Create User (POST)
Route::get('/hello', function () {
    return [
        'message' => 'Hello from Laravel!',
        'status'  => 'working',
    ];
});

Route::get('/hello/{name}', function ($name) {
    return ['message' => "Hello, $name!"];
});