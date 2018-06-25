<?php
use Log;
Route::get('/test-generate-log', function () {
    Log::info('Test');

Route::get('/overwrite-file', function () {
    return "hello";
});
});