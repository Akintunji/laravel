<?php
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $Myjmart=User::where("email",Auth::user()->email)->get();
    //$Myjmart=users::where('email','=' Auth::user()->email)->get();

    return view('dashboard', ['Myjmarts'=>$Myjmart]);
    //foreach($Myjmarts as $row){
    //session(['user' => '$row->name']);
    //$value = session('s');}


})->middleware(['auth'])->name('dashboard');





Route::get('/continue', function () {
    $Myjmart=user::all();
    return view('continue', ['Myjmarts'=>$Myjmart]);

Route::get('/postjob','showjobform' )->middleware(['auth']);
Route::post('/jobsfeed', [Thejobmart::class,'save'])->middleware(['auth']);
Route::get('/comment', [Thejobmart::class,'showcomment']);
Route::post('/comment', [Thejobmart::class,'postcomment'])->name('comment');
Route::delete('/continue/{id}', [Thejobmart::class,'delete'])->name('comment');
    
});
require __DIR__.'/auth.php';
