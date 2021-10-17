<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailJob;

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

Route::get('/send-to-email', function(){
    try {
        $details['email'] = 'ajpanghulan.pnhs@gmail.com';
        dispatch(new App\Jobs\SendEmailJob($details));
        dd('done');
    } catch(Throwable $e) {
        dd($e);
    }
    
});
