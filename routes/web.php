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
    $helloWorld = 'Hello World';

    return view('welcome', ['helloWorld' => $helloWorld]);
});

Route::get('/model', function () {
    //$products = \App\Product::all();

    /*   $user = new \App\User();
    $user->name = "Usuario Teste";
    $user->email = "email@teste.com";
    $user->password = bcrypt('12345678');

    $user->save();

    return \APP\User::all(); */

    /*  $user = \App\User::create(
    [
    'name' => 'Nando Castro',
    'email' => 'email11@email.com',
    'password' => bcrypt('12345678')
    ]
    );
    dd($user);
    return $user; */
    //$user = \App\User::find(4);
    //$categoria = \App\Category::find(1);
    //$categoria->product;
    //Criar uma loja para um usuario;
    /* $user = \App\User::find(10);
    $store = $user->store()->create([
    'name' => 'Loja teste',
    'description' =>'Loja teste de produtos de informatica',
    'phone_mobile'=>'xx-xxxx-xxxx',
    'phone'=>'xx-xxxx-xxxx',
    'slug'=>'loja-teste'
    ]);
    dd($store);
    //return \App\User::all(); */
    //Criar uma produto de uma loja
    /*    $store = \App\Store::find(41);
    $product =$store ->products()->create([
    'name' =>'Notebook Dell',
    'description' =>'Core I5 10G',
    'body' =>'Qualquer Coisa',
    'price' =>2999.99,
    'slug' =>"notebook-dell",
    ]); */

    /*  \App\Category::create([
    'name' =>'Games',
    'description' =>null,
    'slug' =>'games',
    ]);

    \App\Category::create([
    'name' =>'Notebooks',
    'description' =>null,
    'slug' =>'notebooks',
    ]); */

   /*  $product = \App\Product::find(41);
    dd($product->categories()->attach([1]));
    return \App\User::all(); */

});



Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function (){

    Route::prefix('/stores')->name('stores.')->group(function(){

        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        Route::post('/update/{store}', 'StoreController@update')->name('update');
        Route::post('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    });
});
