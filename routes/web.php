 <?php

use Illuminate\Support\Facades\Route;

 

//cara 1 masuk welcome page
Route::get('/', function() {
    $name = "I Gede kresna Putra Aryawan 11";
    return view('home', [ 'name' => $name ]);
});

//cara 2 masuk welcme page
//Route::view('/', 'welcome');

Route::get('contact us', function (){
    return '082132389713';
});


Route::view ('contact', 'contact');
Route::view('about','about');


