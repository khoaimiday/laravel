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
Route::get('/admin/index','PageController@getAdminIndex');  
    //News
    Route::get('/admin/news/index','NewsController@index');
    Route::get('/admin/news/create','NewsController@create');
    Route::post('/admin/news/postCreate','NewsController@postCreate');
    Route::get('/admin/news/update/{id}','NewsController@update');
    Route::post('/admin/news/postUpdate/{id}','NewsController@postUpdate');
    Route::get('/admin/news/delete/{id}','NewsController@delete');


// USER ROUTE
Route::get('/product', 'ProductController@index');
Route::get('/seedproduct', 'ProductController@seedProduct');
Route::get('/news','PageController@newsIndex');
Route::get('/home','HomeController@index');
Route::get('/store',function(){
    return view('store.store');
});

// FAKER
Route::get('/customer', function(){
    $faker = Faker\Factory::create();
    $limit = 100;
    $customer = [];
    for ($i=0; $i < $limit; $i++) {
        $customer[$i] = [
            'Họ và tên' => $faker->name,
            'Email' => $faker->email,
            'Số điện thoại' => $faker->phoneNumber,
            'Website' => $faker->domainName,
            'Tuổi' => $faker->numberBetween(20,100),
            'Địa chỉ' => $faker->address,

        ];
    }
    return response()->json($customer);
});
Route::get('/seedproduct', function(){
    $faker = Faker\Factory::create();
    $limit = 30;
    $products = [];
    for ($i=0; $i < $limit; $i++) {
        $products[$i] = [
                'id'=> $faker->numberBetween($min = 1000, $max = 9000),
                'name'=>$faker->name,
                'price'=>$faker->randomDigitNotNull,
                'description'=>$faker->text,
                'content'=>$faker->text,
                'discount'=>$faker->randomDigit,
                'sellCount'=>$faker->randomDigit,
                'dvt'=>'hộp',
                'madeIn'=>$faker->country,
                'useFor'=>$faker->title($gender = 'male'|'female'),
                'image'=>'',
                'ingredient'=>$faker->text,
                'safety'=>$faker->text,
                'brandId'=>$faker->state,
                'groupId'=>$faker->randomDigit,
        ];
    }
    foreach ($products as $product) {
        $p = new Product($product);
        $p->save();
    }
    return response()->json($products);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
