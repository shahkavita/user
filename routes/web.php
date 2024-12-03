<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userlist;
use App\Http\Controllers\students;
use Illuminate\Support\Facedes\DB;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/adduser', function () {
    return view('adduser');
});
Route::get('/addstudent', function () {
    return view('addstudent');
});

Route::post('/registeruser',[userlist::class,'registeruser'])->name('registeruser');
Route::get('/userlist',[userlist::class,'pagination'])->name('userlist');
Route::get('/updateuser/{id}',[userlist::class,'updateuser'])->name('updateuser');
Route::post('/update_user/{id}',[userlist::class,'update_user'])->name('update_user');
Route::get('/userlist/{id}',[userlist::class,'deleteuser'])->name('deleteuser');

route::get('/studentlist',[students::class,'show_student']);
Route::post('/registerstudent',[students::class,'registerstudent'])->name('registerstudent');

