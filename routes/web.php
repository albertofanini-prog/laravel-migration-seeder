<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/fakertest',function(){
    $faker = Faker\Factory::create();
    $limit = 10;
    for ($i = 0; $i < $limit; $i++) {
        echo nl2br(
            'Brand: ' . $faker->name . 
            ', Email Address: ' . $faker->unique()->email . 
            ', Contact No: ' . $faker->phoneNumber . "\n");
    }
});

Route::get('/', 'TrainController@index');