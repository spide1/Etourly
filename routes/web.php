<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\FinalProject;
Route::get('/index',[FinalProject::class,'index']);
Route::get('/book',[FinalProject::class,'book']);
Route::post('/submit',[FinalProject::class,'book_action']);
Route::get('/register',[FinalProject::class,'register']);
Route::post('/reg_sub',[FinalProject::class,'reg_sub']);
Route::get('/login',[FinalProject::class,'login']);
Route::post('/login_data',[FinalProject::class,'login_data']);
Route::get('/myaccount',[FinalProject::class,'myaccount']);
Route::get('/myadmin',[FinalProject::class,'myadmin']);
Route::get('/destination',[FinalProject::class,'destination']);
Route::get('/packages',[FinalProject::class,'packages']);
Route::get('/contactus',[FinalProject::class,'contactus']);
Route::post('/contactus_action',[FinalProject::class,'contactus_action']);
Route::get('/logout',[FinalProject::class,'logout']);
Route::get('/edit_reg{ep}',[FinalProject::class,'edit_reg']);

Route::post('/edit_reg_action',[FinalProject::class,'edit_reg_action']);
Route::get('/display_booking{up}',[FinalProject::class,'display_booking']);

Route::get('/edit_booking{ep1}',[FinalProject::class,'edit_booking']);
Route::post('/edit_booking_action',[FinalProject::class,'edit_booking_action']);

Route::get('/delete_booking{dl1}',[FinalProject::class,'delete_booking']);

Route::get('/display_admin{em}',[FinalProject::class,'display_admin']);

Route::get('/block{blk}',[FinalProject::class,'block']);
Route::get('/unblock{ublk}',[FinalProject::class,'unblock']);

Route::get('/confirm{cnf}',[FinalProject::class,'confirm']);
Route::get('/cancel{cl}',[FinalProject::class,'cancel']);

Route::get('/changepassword{cp}',[FinalProject::class,'changepassword']);
Route::post('/newpassword',[FinalProject::class,'newpassword']);
Route::get('/delete{del}',[FinalProject::class,'delete']);











