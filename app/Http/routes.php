<?php
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ArticlesController@getIndex');
Route::controller('articles', 'ArticlesController');
