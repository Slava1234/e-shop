<?php

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

use App\Models\Article;
use App\Models\User;

/*
* Один ко многим
*/
Route::get('/', function () {
    $articles = Article::all();

    foreach ($articles as $article) {
        echo "<h1>".$article->title." posted by: ". $article->user->name ."</h1>";
        echo $article->body;
    }
});

Route::get('/profile/{username}', function($username){
    $user = User::where('name', $username)->firstOrFail();

    //if(!$user) App::abort(404);
    echo $user->name."<hr>";
    echo "<b>Country:</b> " . $user->adress->country;

    foreach ($user->articles as $article) {
        echo "<h1>".$article->title."</h1>";
        echo "<p>".$article->body."</p>";
    }
});
