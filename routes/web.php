<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\GptController;
use App\Http\Controllers\CaculatorController;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;

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



Route::get('/', function () {
    return view('welcome');
});
// Route::get('gpt',function () {
//     return view('showgpt');
// } );

Route::get('caculator',function () {
    return view('showCaculator');
} );
// Route::post('gpt', 'GptController@gptb1')->name('gpt.post');

// Route::post('gpt', [GptController::class, 'gptb1'])->name('gpt.post');

Route::post('caculator', [CaculatorController::class, 'Caculators'])->name('caculator.post');

// Route::get('gpt', [GptController::class, 'gptb1'])->name('gpt.post');
/////////////////////////////////////


//  };
//////////////////////////////////
// Route::get('gpt', function () {
//     return view('showgpt');
// });

// Route::post('gpt', function ( Request $request ) {
//     $a = $request->input( 'a' );     
//     $b = $request->input( 'b' ); 
//     if($a ==0) {
//         if($b ==0){
//             $kq ="Phương trinh vo so nghiem";
//         }
//         else{
//             $kq ="Phương trinh vo nghiem";


//         }
//     } 
//     else{
//         $kq ="Phương trinh co nghiem x=".-$b/$a;

//     }  
//     // return view('showgpt',['kq'=>$kq]);
//     return view('showgpt',compact('kq','a','b'));
// })->name('gpt.post');
// Route::resource('car', 'CarController');
Route::resource('cars', CarController::class);
// Route::get('create',function () {
//     return view('create');
// } );

// tương tương với 7 roesource 
// Route::get('cars', [CarController::class ,'index'])->name('cars.index');
// Route::get('cars', [CarController::class ,'store'])->name('cars.store');
// Route::get('cars/create', [CarController::class ,'create'])->name('cars.index');

// Route::get('cars/{car}', [CarController::class ,'show'])->name('cars.show');
// Route::get('cars/{car}', [CarController::class ,'update'])->name('cars.update');
// Route::get('cars/{car}', [CarController::class ,'destroy'])->name('cars.destroy');
// Route::get('cars/{car}/edit', [CarController::class ,'edit'])->name('cars.edit');

