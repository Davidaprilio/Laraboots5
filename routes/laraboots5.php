<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/docs')->middleware('web')->group(function () {

    Route::get('/alert', function()
    {
        return view('laraboots5::docs.alert');
    });

    Route::get('/forms', function()
    {
        return view('laraboots5::docs.forms');
    });

    Route::post('/forms', function()
    {
        request()->validate([
            'test' => 'required|email|min:5|max:10'
        ]);
    });
});