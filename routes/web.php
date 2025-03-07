<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class, 'index'] )->name('index');
Route::get('/page1',[SiteController::class, 'page1'] )->name('page1');
Route::get('/page2',[SiteController::class, 'page2'] )->name('page2');
Route::get('/page3',[SiteController::class, 'page3'] )->name('page3');
Route::get('/page4',[SiteController::class, 'page4'] )->name('page4');
Route::get('/page5',[SiteController::class, 'page5'] )->name('page5');
Route::get('/page6',[SiteController::class, 'page6'] )->name('page6');
Route::get('/page7',[SiteController::class, 'page7'] )->name('page7');

//post back
Route::post('/PostBackRequest',[SiteController::class, 'PostBackRequest'] )->name('PostBackRequest');
route::post('/UploadRequest',[SiteController::class, 'UploadedRequest'] )->name('UploadRequest');