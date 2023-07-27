<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\NavController;  
use App\Http\Controllers\FooterController;  
use App\Http\Controllers\ServicesController; 
use App\Http\Controllers\Auth\RegisteredUserController;

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
    return view('home'); 
 }); 

//  })->middleware(['auth'])->name('dashboard');

//  require __DIR__.'/auth.php'; 
Route::get('login',[NavController::class,'index'])->name('login');  
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('postLogin');
Route::get('register',[NavController::class,'show'])->name('register'); 
Route::post('register', [ RegisteredUserController::class, 'store'])->name('postRegister'); 
Route::get('home',[NavController::class,'gethome'])->name('home');  
Route::get('logout', [ RegisteredUserController::class, 'logout'])->name('logout');  
Route::get('scan',[NavController::class,'getscan'])->name('scan'); 
Route::get('aid',[NavController::class,'getaid'])->name('aid'); 
Route::get('ins',[NavController::class,'getins'])->name('ins'); 
Route::get('about',[FooterController::class,'about'])->name('about'); 
Route::get('team',[FooterController::class,'team'])->name('team'); 
Route::get('contact',[FooterController::class,'contact'])->name('contact'); 
Route::get('qas',[FooterController::class,'qas'])->name('qas'); 
Route::get('hospital',[ServicesController::class,'showhospitals'])->name('hospital'); 
Route::get('lab',[ServicesController::class,'showlabs'])->name('lab'); 
Route::get('pharmacy',[ServicesController::class,'showpharmacy'])->name('pharmacy'); 
Route::get('doctspecialize',[ServicesController::class,'showdocs'])->name('doctspecialize'); 
Route::get('medicine',[ServicesController::class,'showmedicine'])->name('medicine'); 
Route::get('docsdetail',[ServicesController::class,'showdocsdetail'])->name('docsdetail'); 
Route::get('pharmproducts',[ServicesController::class,'showpharmproducts'])->name('pharmproducts');


