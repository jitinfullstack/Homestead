<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', [ArticleController::class, 'index']);

Route::get('articles/{id}', [ArticleController::class, 'show']);

Route::post('articles', [ArticleController::class, 'store']);

Route::put('articles/{id}', [ArticleController::class, 'update']);

Route::delete('articles/{id}', [ArticleController::class, 'delete']);

Route::post('register', [RegisterController::class, 'register']);

// Route::get('articles/{id}', function($id) {
//     return Article::find($id);
// });

// Route::post('articles', function(Request $request) {
//     return Article::create($request->all);
// });

// Route::post('articles', function(Request $request) {
//     $article = $request->all();
//         return Article::create([
//             'title' => $article['title'],
//             'body' => $article['body'],
//         ]);
// });

// Route::put('articles/{id}', function(Request $request, $id) {
//     $article = Article::findOrFail($id);
//     $article->update($request->all());

//     return $article;
// });

// Route::delete('articles/{id}', function($id) {
//     Article::find($id)->delete();

//     return 204;
// });
