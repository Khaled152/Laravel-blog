<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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
    return view('index');
});



Route::get('/admin', [postController::class, 'index'])->name('post.index');
Route::get('/admin/create', [postController::class,'create'])->name('post.create');
Route::get('/admin/{post}', [postController::class, 'show'])->name('show.post');


//Route::get('/admin2', function () {
  //  $posts=[['id'=>1,'title'=>'java','descrption'=>'this first post','posted_by'=>'khaled','created_by'=>'2022-10-13']];
    //return view('admin.admin',[
      //  'posts'=>$posts
    //]);
//});
