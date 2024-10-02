<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});


// For authentication
Route::get('/login', function () {return view('auth.login');});
Route::get('/signup', function () {return view('auth.signup');});

// For Student
Route::get('/student/home', function () {return view('student.home');});
Route::get('/student/assessment', function () {return view('student.assessment');});
Route::get('/student/profile', function () {return view('student.profile');});
Route::get('/student/history', function () {return view('student.history');});
Route::get('/student/contact', function () {return view('student.contact');});

// For Employee
Route::get('/employee/home', function () {return view('employee.home');});
Route::get('/employee/assessment', function () {return view('employee.assessment');});
Route::get('/employee/profile', function () {return view('employee.profile');});
Route::get('/employee/history', function () {return view('employee.history');});
Route::get('/employee/contact', function () {return view('employee.contact');});

// For admin
Route::get('/admin/home', function () {return view('admin.home');});
