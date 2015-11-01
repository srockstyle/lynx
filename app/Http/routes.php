<?php
// Default Routing
Route::get('/', 'Article\ArticlesController@getIndex');
Route::get('/post/{id}', 'Article\ArticlesController@getShow');
Route::get('/tag/{id}/post','Article\ArticlesController@getTagIndex');

// Theme Routing Space
// none

// MasterPageRouting
Route::get('/ln-admin/articles', 'Article\ArticleAdminController@getIndex');
Route::get('/ln-admin/articles/{id}/edit', 'Article\ArticleAdminController@getEdit');
Route::get('/ln-admin/articles/new', 'Article\ArticleAdminController@getNew');
Route::post('/ln-admin/create', 'Article\ArticleAdminController@postCreate');
Route::post('/ln-admin/update', 'Article\ArticleAdminController@postUpdate');
Route::post('/ln-admin/delete', 'Article\ArticleAdminController@postDelete');
