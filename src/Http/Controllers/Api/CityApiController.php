<?php

namespace Jsdecena\MCPro\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Jsdecena\MCPro\Models\Province;
use Jsdecena\MCPro\Models\City;

class CityApiController extends Controller
{
	public function index($country_id, $province_id)
	{
		return response()->json(['data' => Province::find($province_id)->cities ]);
	}

	public function show($country_id, $province_id, $city_id)
	{
		return response()->json(['data' => City::find($city_id)]);
	}
}