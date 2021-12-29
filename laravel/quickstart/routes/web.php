<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\TaskController;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return redirect()->route('tasks.index');
    });
    Route::resource('tasks', TaskController::class);
});
