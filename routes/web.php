<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/admin/layout/home',[LayoutController::class, 'getLayout']);
Route::get('/admin/layout/form',[LayoutController::class, 'getForm']);
Route::get('/admin/layout/table',[LayoutController::class, 'getTable']);

Route::get('/admin/event/demo1',[EventController::class, 'demo1']);
Route::get('/admin/event/demo2',[EventController::class, 'demo2']);
Route::get('/admin/event/demo3',[EventController::class, 'demo3']);

Route::get('/admin/event/list',[EventController::class, 'getList']);
Route::get('/admin/event/detail',[EventController::class, 'getDetail']);

Route::get('/admin/event/edit',[EventController::class, 'getEdit']);
Route::post('/admin/event/edit',[EventController::class, 'processEdit']);

Route::get('/admin/event/create',[EventController::class, 'handleForm']);
Route::post('/admin/event/create',[EventController::class, 'processForm']);


Route::get('/admin/event/delete',[EventController::class, 'getDelete']);
Route::post('/admin/event/delete',[EventController::class, 'processDelete']);


