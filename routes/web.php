<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\userControl;
use App\Http\Controllers\ideaControl;
use App\Models\Idea;

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/pools', function(){
    return view('pool.pools',[
        'ideas'=>Idea::where('privacy','true')->latest()->paginate(8)
    ]);
});
Route::get('/register',[userControl::class,'create']);
Route::post('/register',[userControl::class,'store']);

Route::post('/login',function(){
    return view('user.login');
});
Route::post('/login',[userControl::class,'login']);

Route::prefix('create')->group(
    function(){

Route::get('/idea',[ideaControl::class,'create']);
Route::post('/idea',[ideaControl::class,'store']);
    }
);
Route::get('/idea/{idea}',[ideaControl::class,'idea']);
Route::get('/user/{user}',function(){
    return view('user.profile');
});

Route::get('/user/{user}/profile',function(){
    return view('user.edit');
});

Route::post('/user/{user}',[userControl::class,'editProfile']);

Route::get('/user/{user}/ideas',function(){
    // function for now
    return redirect('/pools');
});

Route::post('/user/{user}/follow',[userControl::class,'follow']);
