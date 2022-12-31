<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/lb5/docs')->middleware('web')->group(function () {

    // laraboots5 view path
    function lbv(string $view_name) {
        return "laraboots5::docs.{$view_name}";
    }

    Route::get('/alert', function () {
        return view('laraboots5::docs.alert');
    });

    // Forms
    Route::view('forms-overview', lbv('forms'));
    Route::view('forms-control', lbv('forms'));
    Route::view('forms-select', lbv('forms'));
    Route::view('forms-check-radio', lbv('forms'));
    Route::view('forms-range', lbv('forms'));

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
