<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/lb5/docs')->middleware('web')->group(function () {

    // laraboots5 view path
    function lbv(string $view_name) {
        return "laraboots5::docs.{$view_name}";
    }

    // Forms
    Route::prefix('forms')->group(function () {
        Route::view('overview', lbv('forms'));
        Route::view('control', lbv('forms'));
        Route::view('select', lbv('forms'));
        Route::view('check-radio', lbv('forms'));
        Route::view('range', lbv('forms'));
    });

    // Components
    Route::prefix('/components')->group(function () {
        Route::view('/alerts', lbv('alert'));
    });


    // BackEnd Demo
    Route::post('/form', function () {
        request()->validate([
            'form1' => 'required|min:100',
            'form2' => 'required|min:100',
            'form3' => 'required|min:100',
            'form4' => 'required|min:100',
        ]);
        return redirect()->back();
    });

    Route::post('/flash-message', function () {
        return redirect()->back()->with('flash-demo', 'Flash messages');
    })->name('flash');

    Route::post('/error', function () {
        return redirect()->back()->withErrors(['error-demo' => 'Error messages']);
    })->name('error');
});
