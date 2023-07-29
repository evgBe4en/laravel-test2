<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::resource([
//    'namespace' => 'App\Http\Controllers\MenuController',
//    'prefix' => 'api'
//], function () {
//    Route::get('/menus',);
////    Route::get('/menus/create', 'CreateController');
////    Route::post('/menus', 'StoreController');
////    Route::get('/menus/{menusItem}', 'ShowController');
////    Route::get('/menus/{menusItem}/edit', 'EditController');
////    Route::patch('/menus/{menusItem}', 'UpdateController');
////    Route::delete('/menus/{menusItem}', 'DeleteController');
//});

Route::resource('menuItems', MenuItemController::class);
Route::resource('users', UsersController::class);
Route::resource('orders', OrderController::class);
Route::resource('categories', CategoryController::class);
