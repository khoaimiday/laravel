<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Product;


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
    return view('home');
});

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return view('login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function(){
    return view('product.index');
})->middleware('auth');


//ADMIN ROUTE
Route::group(['prefix' => 'admin/'], function () {

    Route::get('/index','PageController@getAdminIndex');

    //NEWS
    Route::get('/news/index',['as'=>'admin-news','uses'=>'NewsController@index']);
    Route::get('/news/create',['as'=>'create-news','uses'=>'NewsController@create']);
    Route::post('/news/postCreate','NewsController@postCreate');
    Route::get('/news/update/{id}',['as'=>'update-news','uses'=>'NewsController@update']);
    Route::post('/news/postUpdate/{id}','NewsController@postUpdate');
    Route::get('/news/delete/{id}','NewsController@delete');

    //CART


    //PRODUCT
    Route::get('/product/index', 'ProductController@index');
    Route::get('/product/create','ProductController@create');
    Route::post('/product/postCreate','ProductController@postCreate');
    Route::get('/product/update/{id}','ProductController@update');
    Route::get('/product/detail/{id}','ProductController@detail');
    Route::post('/product/postUpdate/{id}','ProductController@postUpdate');
    Route::get('/product/delete/{id}','ProductController@delete');

    //BRAND
    Route::get('/brand/index', 'BrandController@index');
    Route::get('/brand/create','BrandController@create');
    Route::post('/brand/postCreate','BrandController@postCreate');
    Route::get('/brand/update/{id}','BrandController@update');
    Route::post('/brand/postUpdate/{id}','BrandController@postUpdate');
    Route::get('/brand/delete/{id}','BrandController@delete');

    //PRODUCT TYPE
    Route::get('/categories/index', 'ProductTypeController@index');
    Route::get('/categories/create','ProductTypeController@create');
    Route::post('/categories/postCreate','ProductTypeController@postCreate');
    Route::get('/categories/update/{id}','ProductTypeController@update');
    Route::post('/categories/postUpdate/{id}','ProductTypeController@postUpdate');
    Route::get('/categories/delete/{id}','ProductTypeController@delete');

    //FEED BACK
    Route::get('/feedback/index', 'FeedBackController@index');
    Route::get('/feedback/create','FeedBackController@create');
    Route::post('/feedback/postCreate','FeedBackController@postCreate');
    Route::get('/feedback/update/{id}','FeedBackController@update');
    Route::post('/feedback/postUpdate/{id}','FeedBackController@postUpdate');
    Route::get('/feedback/delete/{id}','FeedBackController@delete');

    //COMMENT
    Route::get('/comment/index', 'CommentController@index');
    Route::get('/comment/create','CommentController@create');
    Route::post('/comment/postCreate','CommentController@postCreate');
    Route::get('/comment/update/{id}','CommentController@update');
    Route::post('/comment/postUpdate/{id}','CommentController@postUpdate');
    Route::get('/comment/delete/{id}','CommentController@delete');


});
###############################################################################

//USER ROUTE

Route::get('/product', function(){
    return view('user.product.index');
});
Route::get('/productdetail', function(){
    return view('user.product.details');
});
Route::get('/seedproduct', 'ProductController@seedProduct');

Route::get('news',['as'=>'news','uses'=>'PageController@newsIndex']);

Route::get('user/news/newsDetail/{id}',['as'=>'newsdetail','uses'=>'NewsController@newsDetail']);

Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);

Route::post('/comment',['as'=>'comment','uses'=>'CommentController@Comment']);

Route::get('store',['as'=>'store','uses'=>function(){
    return view('user.store.store');}]);

Route::get('/cartindex',function(){return view('user.cart.cartindex'); });

Route::get('/cartconfirm',function(){return view('user.cart.cartconfirm'); });

Route::get('/cart','CartController@index');

Route::get('/AddCart/{id}',['as'=>'AddCart','uses'=>'CartController@AddCart']);

Route::get('/DeleteItemCart/{id}',['as'=>'DeleteItemCart','uses'=>'CartController@DeleteItemCart']);



