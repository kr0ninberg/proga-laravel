<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/things', function(){
    return view('things', [
        'heading'=> 'Things list',
        'things'=> Thing::all()
        ]);
});

// Route::get('/things', function(){
//     return view('things', [
//         'heading'=> 'Things list',
//         // 'things'=> Thing::all()
//         'things'=> [[
//             'id'=> '1',
//             'name'=> 'Pen',
//             'description'=> 'An instrument for writing or 
//             drawing with ink, typically consisting of a 
//             metal nib or ball, or a nylon tip, fitted into a metal 
//             or plastic holder.',
//             'wrnt'=> '01.01.2025',
//             'master'=> 'user1',
//             'dimension'=> '',
//         ], [
//             'id'=> '2',
//             'name'=> 'Paper', 
//             'description'=> 'Paper is a thin sheet material 
//             produced by mechanically or chemically processing cellulose fibres, 
//             used to printing, painting, graphics, signage, design, packaging, 
//             decorating, writing, and cleaning.', 
//             'wrnt'=> '01.01.2025',
//             'master'=> 'user1',
//             'dimension'=> '',
//         ]]
//     ]);
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