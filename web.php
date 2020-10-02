<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
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

//Route::get('/', function () {
//
//    return redirect()->to('/login');
//});

Route::get('/login/create', function (Request $request) {
    $s = User::create([
       // 'name'=> $request->name,
        'email' =>$request->email,
        'password' =>$request->bcrypt('12345678')
    ]);

    dd($s);


   // return redirect()->to('/login');
});

Route::get('/users/update', function (Request $request) {

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('product-variant', 'VariantController');
    Route::resource('product', 'ProductController');
    Route::resource('blog', 'BlogController');
    Route::resource('blog-category', 'BlogCategoryController');
});
