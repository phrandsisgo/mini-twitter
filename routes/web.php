<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

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
//views werden gespeichert unter resources/views
//der Controller ist unter app/Http/Controllers

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tweets/{id}', [TweetController::class, 'tweets']);
Route::get('/tweets_bearbeiten/{id}', [TweetController::class, 'tweets_bearbeiten']);

Route::post('tweetChanger/{id}', [TweetController::class, 'tweetChanger']);
Route::post('delete_tweet/{id}', [TweetController::class, 'delete_tweet']);
Route::get('feed', [TweetController::class, 'feed']);
Route::get('create_tweet', [TweetController::class, 'create_tweet']);
Route::post('newTweet', [TweetController::class, 'newTweet']);