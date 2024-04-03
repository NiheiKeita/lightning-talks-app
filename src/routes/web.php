<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LightningTalkController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConferenceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('conferences/{conference_id}/lightning-talks', LightningTalkController::class);
Route::resource('conferences/{conference_id}/lightning-talks/{lightning_talk_id}/comments', CommentController::class);
Route::resource('conferences', ConferenceController::class);
