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
    Route::get('/producttype/index', 'ProductTypeController@index');
    Route::get('/producttype/create','ProductTypeController@create');
    Route::post('/producttype/postCreate','ProductTypeController@postCreate');
    Route::get('/producttype/update/{id}','ProductTypeController@update');
    Route::post('/producttype/postUpdate/{id}','ProductTypeController@postUpdate');
    Route::get('/producttype/delete/{id}','ProductTypeController@delete');

});
###############################################################################

//USER ROUTE

Route::get('/product', 'ProductController@index');
Route::get('/seedproduct', 'ProductController@seedProduct');
Route::get('news',['as'=>'news','uses'=>'PageController@newsIndex']);
Route::get('user/news/newsDetail/{id}',['as'=>'newsdetail','uses'=>'NewsController@newsDetail']);
Route::get('/home','HomeController@index');
Route::get('store',['as'=>'store','uses'=>function(){
    return view('user.store.store');}]);

Route::get('/cart','CartController@index');
Route::get('/AddCart/{id}',['as'=>'AddCart','uses'=>'CartController@AddCart']);
// FAKER
// Route::get('/customer', function(){
//     $faker = Faker\Factory::create();
//     $limit = 100;
//     $customer = [];
//     for ($i=0; $i < $limit; $i++) {
//         $customer[$i] = [
//             'Họ và tên' => $faker->name,
//             'Email' => $faker->email,
//             'Số điện thoại' => $faker->phoneNumber,
//             'Website' => $faker->domainName,
//             'Tuổi' => $faker->numberBetween(20,100),
//             'Địa chỉ' => $faker->address,

//         ];
//     }
//     return response()->json($customer);
// });
// Route::get('/seedproduct', function(){
//     $faker = Faker\Factory::create();
//     $limit = 30;
//     $products = [];
//     for ($i=0; $i < $limit; $i++) {
//         $products[$i] = [
//                 'id'=> $faker->numberBetween($min = 1000, $max = 9000),
//                 'name'=>$faker->name,
//                 'price'=>$faker->randomDigitNotNull,
//                 'description'=>$faker->text,
//                 'content'=>$faker->text,
//                 'discount'=>$faker->randomDigit,
//                 'sellCount'=>$faker->randomDigit,
//                 'dvt'=>'hộp',
//                 'madeIn'=>$faker->country,
//                 'useFor'=>$faker->title($gender = 'male'|'female'),
//                 'image'=>'',
//                 'ingredient'=>$faker->text,
//                 'safety'=>$faker->text,
//                 'brandId'=>$faker->state,
//                 'groupId'=>$faker->randomDigit,
//         ];
//     }
//     foreach ($products as $product) {
//         $p = new Product($product);
//         $p->save();
//     }
//     return response()->json($products);

// });



