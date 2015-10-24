<?php
// Default Routing
Route::get('/', 'ArticlesController@getIndex');
Route::get('/post/{id}', 'ArticlesController@getShow');
Route::get('/tag/{id}/post','ArticlesController@getTagIndex');
Route::controller('posts', 'ArticlesController');



