<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontrolelr;

Route::get('/student', function () {
    return view('student');
});

Route::get('/viewarray', [studentcontrolelr::class, 'studarray']);
Route::get('/viewwith', [studentcontrolelr::class, 'studWith']);
Route::get('/viewcompact', [studentcontrolelr::class, 'studcompact']);

Route::get('/viewstudents', [studentcontrolelr::class, 'studentview'])->name('student.list');
Route::post('/student/add', [studentcontrolelr::class, 'addstudent'])->name('student.add');