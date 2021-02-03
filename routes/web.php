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

// Use Illuminate\Http\Request;
Use App\Models\Item;

Route::get('/', 'MakeController');

Route::post('/', 'MakeController@safe');

Route::resource('/user', 'UserController');

Route::get('/item', function (){

    //Create Data
    //Item::create(request()->all());

    $item = Item::create([
        'name' => 'Kentang',
        'price' => 10000,
    ]);
    // View Data
    // $item = Item::find(1);
    
    //Update Data
    // $item->name = 'Tomat';
    // $item->save();

    // return $item;

    //Delate Item
   $item->delete(); 

    return $item;
});


//Mendapatkan Semua Data
// Route::post('/', function (Request $request) {
//     dd($request->all());
// });
//Mendapatkan Data Tertentu
// Route::post('/', function (Request $request) {
//     dd(request('name', 'Asing'));
// });
// //respons
// Route::post('/', function (Request $request) {
//     return redirect('/not_found');
// });

// Route::get('/welcome/{firstName?}/{lastName?}/{age?}', function ($firstName = 'Strangger', $lastName = null, $age = null) {
//     dd($firstName, $lastName, $age);
// });
