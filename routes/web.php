<?php
use App\Http\Controllers\Home;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TukangController;
use Illuminate\Support\Facades\Route;
 

Route::group([ ['middleware' => 'guest']  ], function(){
    Route::get('/register',[RegisterController::class,'index'])->name('register');
    Route::post('/register/create',[RegisterController::class,'create']);
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login/auth',[LoginController::class,'auth']);
});
Route::group([ ['middleware' => 'auth']  ], function(){
    Route::get('/',[Home::class,'index'])->name('home'); 
    Route::get('/tukang',[TukangController::class,'index']); 
    Route::get('/tukang/{tukang}',[TukangController::class,'detail']);  
});