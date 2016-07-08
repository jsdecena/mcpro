<?php

Route::group(['prefix' => 'api/v1' ], function () {

    Route::get('country', 																	'Jsdecena\MCPro\Http\Controllers\Api\CountryApiController@index');
    Route::get('country/{country_id}', 														'Jsdecena\MCPro\Http\Controllers\Api\CountryApiController@show');
    Route::get('country/{country_id}/province', 											'Jsdecena\MCPro\Http\Controllers\Api\ProvincesApiController@index');
    Route::get('country/{country_id}/province/{province_id}',								'Jsdecena\MCPro\Http\Controllers\Api\ProvincesApiController@show');
    Route::get('country/{country_id}/province/{province_id}/city',							'Jsdecena\MCPro\Http\Controllers\Api\CityApiController@index');
    Route::get('country/{country_id}/province/{province_id}/city/{city_id}',				'Jsdecena\MCPro\Http\Controllers\Api\CityApiController@show');
    Route::get('country/{country_id}/province/{province_id}/city/{city_id}/barangay',		'Jsdecena\MCPro\Http\Controllers\Api\BarangayApiController@index');
});