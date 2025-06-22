<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("test",function(){
    return ["Total Schemes"=>27596,"Total Completed Schemes"=>18556];
});

Route::get('students',[StudentController::class,'list']);

