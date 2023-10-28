<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',[StaticController::class, 'index']);
// Route::get('/about',[StaticController::class, 'about']);
// Route::get('/contact',[StaticController::class, 'contact']);
// Route::get('/product',[StaticController::class, 'product']);

// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/', 'welcome');

// Route::get('/store/{category?}/{item?}', function ($category=null, $item=null) {
//     return '<h1>this is the '.$item.' store page '.$category. '</h1>';

// });


// Route::get('/store', function () {
//     $filter = request('style');
//     if(isset($filter)){
//         return 'this is the most trending style in this years <span style="color: red">'.$filter.'</span>';
//     }
//     return 'this is the most trending style in this years <span style="color: red">store</span>';
// });
