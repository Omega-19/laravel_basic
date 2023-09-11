<?php

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
// Route::get('/home', function () {
//     return view("admin.home");
// });

Route::get('/', function () {
    $articles = [
        [
            "id" => 1,
            "title" => "titre article 1",
            "description" => "Raison pour laquelle il préfère grrrrrrrrrrrrrrrrrrrrrrrrrrrrr rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr rrrrrrrrrrrrrrrrrrrrrrrrrrrr et voila l'effet que sa donne sit amet consectetur adipisicing elit."
        ],
        [
            "id" => 2,
            "title" => "titre article 2",
            "description" => "grrr et voila l'effet que sa donne sit amet consectetur adipisicing elit."
        ],
        [
            "id" => 3,
            "title" => "titre article 3",
            "description" => "Raison pour laquelle grrrrrrrrrrrrrrr et voila l'effet que sa donne sit amet consectetur adipisicing elit."
        ],
        [
            "id" => 4,
            "title" => "titre article 3",
            "description" => "il préfère grrrrrrrrrrrrrrrrrr et voila l'effet que sa donne sit amet consectetur adipisicing elit."
        ],
    ];
    // $articles = [];
    return view("admin.home" , [
        'articles' => $articles,
        "user" => "Highfive5"
    ]);//fonction permettant de retourner une vue
});

//Route avec paramètres

//l'ordre des paramètres importe
Route::get('/article/{id}', function (int $id) {
    return "Détails de l'article " . $id;
 });

 //Route nommée deuxième manière: 

Route::get('/particuliers/en/share/space/{id}', function (int $id) {
    return "Route particuliers " . $id;
})->name('detail');