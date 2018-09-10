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

Route::get('/profile', function () {

    $profile = [
        'interests' => ['Rugby', 'fitness', 'gamen'],
        'name'  => 'Fedde',
        'email'   => 'f.vangils@rocwb.nl',
        'lorem' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto commodi dignissimos distinctio facere, ipsa magni neque nihil, odio officiis quas qui recusandae repellat rerum unde, velit vitae. En mijn hobbys zijn:'
    ];
    return view('profile')->with($profile);
});

