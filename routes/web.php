<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function (){
    return 'Available jobs';
})->name('jobs');

Route::get('/test', function(Request $request){

});


