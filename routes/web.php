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
    // return view('welcome');
    return 'Main Page';
});

Route::get('/hello', function(){
    return 'Hello';
});

Route::get('/hallo', function(){
    return redirect('/hello');
});

Route::get('/greet/{name}', function($name){
    return 'Hi there ' .  $name . '!';
});

Route::fallback(function(){
    return 'OOPS... Wrong turn. The page you are looking for does not exist. Go back to where you should be.';
});



// GET = READ DATA, FETCH DOCUMENTS
// POST = STORE DATA, CREATE SOMETHING ON THE SERVER
// PUT = MODIFY EXISTING DATA
// DELETE = DELETE DATA