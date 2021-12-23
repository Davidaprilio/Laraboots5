<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/docs')->group(function () {
    Route::get('/forms', function() {
        echo 'Hello Docs from the Bootstrap5 Component Laravel';
    });
});