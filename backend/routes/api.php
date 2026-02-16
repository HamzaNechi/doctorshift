<?php


use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok'
    ]);
});



Route::get('/messages', function () {
    return response()->json([
        ['id' => 1, 'text' => 'Hello from Laravel!'],
        ['id' => 2, 'text' => 'This is a test message.'],
        ['id' => 3, 'text' => 'React + Laravel works!'],
    ]);
});
