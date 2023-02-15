<?php

use App\Models\Idea;

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
use App\Models\Solution;
use App\Http\Controllers\ideaControl;
use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\solutionControl;

//Primary User Routes
Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/pools', function(){
    return view('pool.pools',[
        'ideas'=>Idea::where('privacy','true')->latest()->paginate(8),
        'solutions'=>Solution::where('privacy','true')->latest()->paginate(8)
    ]);
});
Route::get('/register',[userControl::class,'create']);
Route::post('/register',[userControl::class,'store']);

Route::post('/login',function(){
    return view('user.login');
});
Route::post('/login',[userControl::class,'login']);
Route::get('/logout',[userControl::class,'logout']);
//Idea Routes

Route::prefix('create')->group(
    function(){

Route::get('/idea',[ideaControl::class,'create']);
Route::post('/idea',[ideaControl::class,'store']);
    }
);
Route::get('/pools/solutions',[solutionControl::class,'all']);
Route::get('/create/solution',[solutionControl::class,'create']);

Route::post('/create/solution',[solutionControl::class,'store']);
Route::get('/pools/ideas',[ideaControl::class,'all']);

Route::get('/solutions/{solution}',[solutionControl::class,'solution']);
Route::get('/ideas/{idea}',[ideaControl::class,'idea']);
Route::get('/idea/{idea}/edit',[ideaControl::class,'edit']);
Route::post('/idea/{idea}/update',[ideaControl::class, 'update']);
Route::get('/idea/{idea}/delete',[ideaControl::class,'delete']);
Route::post('/idea/{idea}/comment',[ideaControl::class,'comment']);
Route::get('/idea/{idea}/like',[ideaControl::class,'like']);

//User Routes
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
