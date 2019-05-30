<?php

// 在线调试接口
Route::get('document/api', 'Fxd\Apidoc\Controllers\ApiController@index');
Route::post('document/upload-example', 'Fxd\Apidoc\Controllers\ApiController@uploadExample');
Route::get('document/get-example', 'Fxd\Apidoc\Controllers\ApiController@getExample');
