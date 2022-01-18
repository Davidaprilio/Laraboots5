<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/docs')->middleware('web')->group(function () {

    Route::get('/alert', function () {
        return view('laraboots5::docs.alert');
    });

    Route::get('/forms', function () {
        return view('laraboots5::docs.forms');
    });

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
