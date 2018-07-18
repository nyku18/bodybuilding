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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addpost', 'PostController@create');
Route::post('/storepost', 'PostController@store');
Route::get('/showpost', 'PostController@show');
Route::get('/editpost', 'PostController@gotoeditpage');
Route::post('/deletepost','PostController@delete');
Route::post('/updatepost','PostController@update');
Route::post('/addcomment','CommentController@gotocommentpage');
Route::post('/storecomment','CommentController@store');



//Route::resource('posts', 'PostController');