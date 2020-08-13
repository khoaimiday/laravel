<?php

use App\Http\Controllers\CustomerController;
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


Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return view('login');
});

<<<<<<< HEAD
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

=======
>>>>>>> 9c51f071778187d6e8c41bf3f94f8840ab61b7b6

//ADMIN ROUTE
Route::group(['prefix' => 'admin/', 'middleware' => 'isLogin'], function () {

    Route::get('/index','PageController@adminIndex')->name('adminhome');

    //NEWS
    Route::get('/news/index',['as'=>'admin-news','uses'=>'NewsController@index']);
    Route::get('/news/create',['as'=>'create-news','uses'=>'NewsController@create']);
    Route::post('/news/postCreate','NewsController@postCreate');
    Route::get('/news/update/{id}',['as'=>'update-news','uses'=>'NewsController@update']);
    Route::post('/news/postUpdate/{id}','NewsController@postUpdate');
    Route::get('/news/delete/{id}','NewsController@delete');

    //ORDER
    Route::get('/order/index',['as'=>'admin-order','uses'=>'OrdersController@index']);
    Route::get('/order/close',['as'=>'closed-order','uses'=>'OrdersController@close']);
    Route::get('/order/cancel',['as'=>'cancel-order','uses'=>'OrdersController@cancel']);
    Route::get('/order/create',['as'=>'create-order','uses'=>'OrdersController@create']);
    Route::post('/order/postCreate','OrdersController@postCreate');
    Route::get('/order/update/{id}',['as'=>'update-order','uses'=>'OrdersController@update']);
    Route::post('/order/postUpdate/{id}','OrdersController@postUpdate');
    Route::get('/order/detail/{id}',['as'=>'detail-order','uses'=>'OrdersController@detail']);
    Route::get('/order/receipt/{id}',['as'=>'receipt-order','uses'=>'OrdersController@receipt']);
    Route::get('/order/tempdelete/{id}',['as'=>'tempdelete-order','uses'=>'OrdersController@tempdelete']);
    Route::get('/order/undo/{id}',['as'=>'undo-order','uses'=>'OrdersController@undo']);
    Route::get('/order/delete/{id}',['as'=>'delete-order','uses'=>'OrdersController@delete']);

    //COMMENT
    Route::get('/comment/list',['as'=>'admin-cmt','uses'=>'CommentController@list']);
    Route::get('/comment/deleted',['as'=>'deleted-cmt','uses'=>'CommentController@deleted']);
    Route::get('/comment/reply/{id}',['as'=>'reply-cmt','uses'=>'CommentController@reply']);
    Route::post('/comment/postReply/{id}','CommentController@postReply');
    Route::get('/comment/tempDel/{id}',['as'=>'tempDel-cmt','uses'=>'CommentController@tempDel']);
    Route::get('/comment/undo/{id}',['as'=>'undo-cmt','uses'=>'CommentController@undo']);
    Route::get('/comment/delete/{id}',['as'=>'delete-cmt','uses'=>'CommentController@delete']);

    //PRODUCT
    Route::get('/product/index', 'ProductController@indexAdmin')->name('productAdm');
    Route::get('/product/create','ProductController@create')->name('productAdmCreate');
    Route::post('/product/postCreate','ProductController@postCreate')->name('productAdmUpdate');
    Route::get('/product/update/{id}','ProductController@update');
    Route::post('/product/postUpdate/{id}','ProductController@postUpdate');
    Route::get('/product/delete/{id}','ProductController@delete');
    Route::get('/product/detail/{id}','ProductController@detailAdmin')->name('productAdmDetail');


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

    //ADMIN
    //CUSTOMER

});
###############################################################################

//USER ROUTE

Route::get('/product', 'ProductController@index');
Route::get('product/detail/{id}', 'ProductController@details')->name('product-detail');

Route::get('user/news/newsDetail/{id}',['as'=>'newsdetail','uses'=>'NewsController@newsDetail']);
Route::post('/comment/{proId}',['as'=>'comment','uses'=>'CommentController@Comment']);
Route::get('store',['as'=>'store','uses'=>function(){return view('user.store.store');} ]);

Route::get('/cart','CartController@index');
Route::get('/AddCart/{id}',['as'=>'AddCart','uses'=>'CartController@AddCart']);
Route::get('/DeleteItemCart/{id}',['as'=>'DeleteItemCart','uses'=>'CartController@DeleteItemCart']);
Route::get('/minusItem/{id}',['as'=>'minusItem','uses'=>'CartController@minusItem']);
Route::get('/plusItem/{id}',['as'=>'plusItem','uses'=>'CartController@plusItem']);
Route::post('/saveCart',['as'=>'saveCart','uses'=>'CartController@saveCart']);
Route::post('/deleteCart',['as'=>'deleteCart','uses'=>'CartController@deleteCart']);
Route::get('/updateItem/{id}/{quantity}',['as'=>'updateItem','uses'=>'CartController@updateItem']);
Route::get('/DeleteListItemCart/{id}',['as'=>'DeleteListItemCart','uses'=>'CartController@DeleteListItemCart']);
Route::get('/checkOrderLogin',['as'=>'checkOrderLogin','uses'=>'OrdersController@checkOrderLogin']);
Route::post('/checkOrder',['as'=>'checkOrder','uses'=>'OrdersController@checkOrder']);



Route::get('/contact','HomeController@contact');
Route::get('/feedback/feedbackList', 'FeedbackController@feedbackList');
Route::post('/feedback/postFeedback','FeedbackController@postFeedback');
Route::get('feedback/deleteFeedback/{id}', 'FeedbackController@deleteFeedback');
Route::get('feedback/doneFeedback/{id}' , 'FeedbackController@doneFeedback');
Route::get('feedback/pendingFeedback/{id}', 'FeedbackController@pendingFeedback');
Route::get('feedback/onStatusFeedback/{id}', 'FeedbackController@onStatus');
Route::get('feedback/offStatusFeedback/{id}', 'FeedbackController@offStatus');
//FAQ
Route::get('/FAQ','HomeController@FAQ');
//admin
Route::get('/superAdmin/adminList','CustomerController@adminList');
Route::get('/superAdmin/CreateAdmin','CustomerController@CreateAdmin');
Route::post('/superAdmin/PostCreateAdmin','CustomerController@PostCreateAdmin');
Route::get('/superAdmin/adminUpdate/{id}','CustomerController@adminUpdate');
Route::post('/superAdmin/AdminPostUpdate/{id}','CustomerController@AdminPostUpdate');
Route::get('/superAdmin/deleteAdmin/{id}','CustomerController@deleteAdmin');
Route::get('/SuperAdmin/resetPassword/{id}','CustomerController@resetPassword');

//customer
Route::get('/customer/customerList','CustomerController@customerList');
Route::get('/customer/customerDelete/{id}','CustomerController@customerDelete');
Route::get('/DeleteItemCart/{id}',['as'=>'DeleteItemCart','uses'=>'CartController@DeleteItemCart']);
Route::get('/minusItem/{id}',['as'=>'minusItem','uses'=>'CartController@minusItem']);
Route::get('/plusItem/{id}',['as'=>'plusItem','uses'=>'CartController@plusItem']);
Route::get('/DeleteListItemCart/{id}',['as'=>'DeleteListItemCart','uses'=>'CartController@DeleteListItemCart']);
Route::get('/users/detailCustomer/{id}','CustomerController@detailCustomer');
Route::post('users/customerPostUpdate/{id}','CustomerController@customerPostUpdate');
Route::get('/customer/customerDeleteList','CustomerController@customerDeleteList');

// SEARCH ROUTER
Route::group(['prefix' => 'search/'], function(){
    Route::get('/searchajax/{query}', 'SearchController@getSearchAjax')->name('searchajax');
    Route::get('cate/{id}', 'SearchController@filterCategories')->name('categories');
    Route::get('searchByFilter', 'SearchController@searchByFilter');
});

Route::get('test',function(){
    return view('test');
});


// BREADCUM USER
Route::get('/home', 'HomeController@index')->name('home');

Route::get('product', 'ProductController@index')->name('product');

Route::get('store',['as'=>'store','uses'=>function(){
    return view('user.store.store');} ]);

Route::get('news',['as'=>'news','uses'=>'NewsController@newsIndex']);

Route::get('user/news/newsDetail/{id}',['as'=>'newsdetail','uses'=>'NewsController@newsDetail']);

Route::get('FAQ','HomeController@FAQ')->name('FAQ');

Route::get('contact','HomeController@contact')->name('contact');

Route::get('/cartlist',['as'=>'ListOrder','uses'=>'CartController@listOrder']);

Route::post('/checkOrder',['as'=>'checkOrder','uses'=>'OrdersController@checkOrder']);
