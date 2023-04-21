<?php

use App\Http\Controllers\TongController;
use App\Http\Controllers\AreaofshapeController;
use Illuminate\Support\Facades\Route;


// use Illuminate\Http\Request;
// use App\Helpers\MathHelper;

// Route :: get('/welcome', function(){
// Return "chào mừng các bạn đã đến với lớp học của thầy Đinh PNV";
// });

// Route :: get('/welcome', [HelloController::class, 'xinchao']);
   
    




// Route::get('/add', function (Request $request) { //cộng
//     $a = $request->input('a');
//     $b = $request->input('b');
//     $result = MathHelper::add($a, $b);
//     return "The sum of $a and $b is $result";
// });

// Route::get('/subtract', function (Request $request) { // trừ
//     $a = $request->input('a');
//     $b = $request->input('b');
//     $result = MathHelper::subtract($a, $b); 
//     return "The difference between $a and $b is $result";
// });

// Route::get('/multiply', function (Request $request) { // nhân
//     $a = $request->input('a');
//     $b = $request->input('b');
//     $result = MathHelper::multiply($a, $b);
//     return "The product of $a and $b is $result";
// });

// Route::get('/divide', function (Request $request) { //chia
//     $a = $request->input('a');
//     $b = $request->input('b');
//     try {
//         $result = MathHelper::divide($a, $b);
//         return "The quotient of $a and $b is $result";
//     } catch (\InvalidArgumentException $e) {
//         return $e->getMessage();
//     }
// });


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

// Route::get('/', function () {
//     return view('test');
// });

// Route::get('/', function () {
//     return view('sum');
// });

Route::get('/show',[TongController::class,'caculator']);
Route::post('/show',[TongController::class,'tong']);

Route::get('/area',[AreaofshapeController::class,'computeArea']);
Route::post('/area',[AreaofshapeController::class,'computeArea']);