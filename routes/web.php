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

    $search = request('search');
    $subscribers = App\Subscriber::when($search, function ($query, $search) {
        return $query->where('name', 'LIKE', '%' . $search . '%');
    })->paginate(8);
    return view('welcome')->withSubscribers($subscribers);
});
