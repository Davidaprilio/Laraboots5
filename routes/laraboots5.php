<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::prefix('/lb5/docs')->middleware('web')->group(function () {

    // laraboots5 view path
    function lbv(string $view_name) {
        return "laraboots5::docs.{$view_name}";
    }

    // Forms
    Route::prefix('forms')->group(function () {
        Route::view('overview', lbv('forms.overview'));
        Route::view('form-control', lbv('forms.form-control'));
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

    // Demo Alert Error & Flash
    Route::any('/alert/{name}', function ($name) {
        $is_error = request()->has('error');
        $message = request()->get('message') ?? 'Pesan dari server ' . rand(100, 999);
        $id = request()->get('id') ?? '';
        $response = Redirect::to(URL::previous() . "#{$id}");
        if ($is_error) {
            $response->withErrors([$name => $message]);
        } else {
            $response->with($name, $message);
        }
        return $response;
    })->name('lb5.demo.alert');

    Route::post('/error', function () {
        return redirect()->back()->withErrors(['error-demo' => 'Error messages']);
    })->name('error');
});
