<?php
// Default Routing
Route::get('/', 'WelcomeController@getIndex');
Route::get('/api/articles', 'Article\ArticlesController@getIndex');
Route::get('/api/articles/{id}', 'Article\ArticlesController@getShow');
Route::get('/api/articles/tag/{id}','Article\ArticlesController@getTagIndex');

// Theme Routing Space
// none

// MasterPageRouting
// Article
Route::get('/ln-admin/articles', 'Article\ArticleAdminController@getIndex');
Route::get('/ln-admin/articles/{id}/edit', 'Article\ArticleAdminController@getEdit');
Route::get('/ln-admin/articles/new', 'Article\ArticleAdminController@getNew');
Route::post('/ln-admin/articles/create', 'Article\ArticleAdminController@postCreate');
Route::post('/ln-admin/articles/update', 'Article\ArticleAdminController@postUpdate');
Route::post('/ln-admin/articles/delete', 'Article\ArticleAdminController@postDelete');
// Tags
Route::get('/ln-admin/tags', 'Tag\TagAdminController@getIndex');
Route::get('/ln-admin/tags/{id}/edit', 'Tag\TagAdminController@getEdit');
Route::get('/ln-admin/tags/new', 'Tag\TagAdminController@getNew');
Route::post('/ln-admin/tags/create', 'Tag\TagAdminController@postCreate');
Route::post('/ln-admin/tags/update', 'Tag\TagAdminController@postUpdate');
Route::post('/ln-admin/tags/delete', 'Tag\TagAdminController@postDelete');


