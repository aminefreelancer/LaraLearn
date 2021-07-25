<?php

use App\Http\Controllers\TestController;
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

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


Route::get('/hello', [TestController::class, 'index']);

// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post: '.$postId.' / Comment: '.$commentId;
});

Route::get('/greeting', function () {
    return redirect()->route('profile');
});

Route::get('/user/profile', [TestController::class, 'profile'])->name('profile');