<?php


Route::get('/api/v1/{model}/{id}', 'ApiController@single');
Route::get('/api/v1/{model}', 'ApiController@collection');
