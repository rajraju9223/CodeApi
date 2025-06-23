<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('students',[StudentController::class,'list']);

Route::get("test",function(){
    return [
        [
        "Total Schemes"=>27596,
        "Total Completed Schemes"=>18556,
        "Total Non Started Schemes"=>18556,
       "Total Started Schemes"=>153
        ],
        [
        "District Name"=>"Bajali",
         "Handed Over"=>140,
         "Functional"=>66,
         "Partially Functional"=>88
        ]
    ];
});
