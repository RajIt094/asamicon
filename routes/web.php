<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;


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


Route::get('/clear-cache-all', function() {
    Artisan::call('cache:clear');
  
   // dd("Cache Clear All");
});
    //--------------------------- Dashboard--------------------------------------------------------
           Route::get('razorpay', [PaymentController::class, 'razorpay'])->name('razorpay'); // create payment

Route::post('payment', [PaymentController::class, 'payment'])->name('payment'); //accept paymetnt  
 
            Route::get('/',[UserController::class,'welcome']);

            Route::get('/index',[UserController::class,'welcome']);
                
            Route::get('/privacy',[UserController::class,'privacy']);
          // Route::get('privacy_policy', 'App\Http\Controllers\AdminController@privacy_policy');

             Route::get('/registration_details',[UserController::class,'registration_details']);
            Route::get('/registration_form',[UserController::class,'registration_form']);

            Route::get('/category_find',[UserController::class,'category_find']);
            Route::get('/typesmonth',[UserController::class,'typesmonth']);
            Route::get('/typesmonth_price',[UserController::class,'typesmonth_price']);
            Route::get('/typesmonth2',[UserController::class,'typesmonth2']);
            Route::get('/residential_price',[UserController::class,'residential_price']);
            Route::get('/category_find2',[UserController::class,'category_find2']);
            
            Route::get('/registration_formstep2',[UserController::class,'registration_formstep2']);

            Route::post('/user_register',[UserController::class,'UserRegister']);

            Route::get('/user_details/{user_id}',[AdminController::class,'UserDetails']);

            Route::post('/msg_submit',[UserController::class,'SubmitMsg']);

            Route::get('/msg_submit',[UserController::class,'registration_form']);

            Route::get('/user_register',[UserController::class,'registration_form']);

            Route::post('/upload_reciept',[UserController::class,'upload_reciept']);

            Route::post('/skip',[UserController::class,'skip']);

            Route::get('/skip',[UserController::class,'registration_form']);

            Route::get('/bank_detail',[UserController::class,'registration_form']);

            Route::get('/dashboard',[AdminController::class,'Admin']);

            Route::get('/admin_index',[AdminController::class,'adminIndex']);

            Route::post('/login',[AdminController::class,'loginPost']);

            Route::get('/logout',[AdminController::class,'logout']);

            Route::get('/check_mail',[AdminController::class,'checkMail']);




















