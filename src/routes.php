<?php

Route::group(['prefix' => 'api/v1' ], function () {

    Route::get('country', 																	'LowBlow\MCPro\Http\Controllers\Api\CountryApiController@index');
    Route::get('country/{country_id}', 														'LowBlow\MCPro\Http\Controllers\Api\CountryApiController@show');
    Route::get('country/{country_id}/province', 											'LowBlow\MCPro\Http\Controllers\Api\ProvincesApiController@index');
    Route::get('country/{country_id}/province/{province_id}',								'LowBlow\MCPro\Http\Controllers\Api\ProvincesApiController@show');
    Route::get('country/{country_id}/province/{province_id}/city',							'LowBlow\MCPro\Http\Controllers\Api\CityApiController@index');
    Route::get('country/{country_id}/province/{province_id}/city/{city_id}',				'LowBlow\MCPro\Http\Controllers\Api\CityApiController@show');
    Route::get('country/{country_id}/province/{province_id}/city/{city_id}/barangay',		'LowBlow\MCPro\Http\Controllers\Api\BarangayApiController@index');
});
