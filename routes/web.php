<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
  $visited = DB::select('select * from places where visited = ?', [1]);
  $togo = DB::select('select * from places where visited = ?', [0]);

  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
});

Route::resource('post', 'PostsController');
Route::get('contact', 'PostsController@contact');
Route::get('show_post/{id}', 'PostsController@show_post');
