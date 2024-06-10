<?php

use App\Http\Controllers\PlacesController;
use App\Http\Controllers\ThingsController;
use App\Models\Place;
use App\Models\Thing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

$controllerPrefix = '\\App\\Http\\Controllers\\';
Route::resource('places', $controllerPrefix.'PlacesController');
Route::resource('things', $controllerPrefix.'ThingsController');

Route::get('/things', [ThingsController::class,'index']);

// Legacy

// Route::get('/places', [PlacesController::class,'index']);

// Route::get('/things', function(){
//     return view('things.things', [
//         'heading'=> 'Things list',
//         'things'=> Thing::all()
//         ]);
// });

// Route::get('/places', function(){
//     return view('places.places', [
//         'heading'=> 'Places list',
//         'places'=> Place::all()
//         ]);
// });

// Route::get('/res', function () {
//     return response('<h1>hello<\h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id){
//     dd('value');
//     ddd('value');
//     return response('post ' . $id);
// })->where('id', '[0-9]+');