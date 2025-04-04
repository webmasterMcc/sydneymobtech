<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' );
});

Route::get('/about', function () {
    return view('about');
  //  return ['laravel'=> "hell world"];
});
Route::get('/services', function () {
    return view('services' , [
      "services" => [
          [   "id" => 1,
              "title" => "Senior Software Engineer",
              "salary" => "$120,000 - $150,000"
          ],
          [   "id" => 2,
              "title" => "Mobile App Developer", 
              "salary" => "$90,000 - $120,000"
          ],
          [   "id" => 3,
              "title" => "Full Stack Developer",
              "salary" => "$100,000 - $130,000"
          ],
          [    "id" => 4,
              "title" => "DevOps Engineer",
              "salary" => "$110,000 - $140,000"
          ],
          [    
              "id" => 5,
              "title" => "UI/UX Designer",
              "salary" => "$80,000 - $110,000"
          ]
      ]
  ]);
  //  return ['laravel'=> "hell world"];
});

Route::get("/jobs/{id}" , function($id){
        dd($id) ;
}) ;

Route::get('/contact', function () {
   // return json_encode(['laravel'=> "hell world"]);
   return view('contact' , [
    "message" => "mensaje de paz"
   ]);
});
