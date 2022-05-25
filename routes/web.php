<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

route::get('/editmyuser', function() {
    return view('edituser');
});

route::get('/register', function() {
    return view('register');
});

route::post('/register',[UserController::class,'register']);

route::get('/userget',[UserController::class,'getuser']);
route::get('/editmyuser',[UserController::class,'getuser']);
route::post('/useredit',[UserController::class,'edituser']);
route::post('/login',[UserController::class,'login']);

route::get('/userlist', function() {
    return view('listuser');
});
 
/*remars: from listuser to search*/
route::get('/userlist',[UserController::class,'search']);
route::post('/userlist',[UserController::class,'search']);

route::get('/userdelete',[UserController::class,'deleteuser']);