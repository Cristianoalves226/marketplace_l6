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

    $user = \App\User::create(
        [
            'name' => 'Nando Castro',
            'email' => 'email11@email.com',
            'password' => bcrypt('12345678')
        ]
    );
    dd($user);
    return $user;
});
