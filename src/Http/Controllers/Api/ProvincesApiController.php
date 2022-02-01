<?php

namespace LowBlow\MCPro\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use LowBlow\MCPro\Models\Country;
use LowBlow\MCPro\Models\Province;

class ProvincesApiController extends Controller
{
	public function index($country_id)
	{
		return response()->json(['data' => Country::find($country_id)->provinces]);
	}

	public function show($country_id, $province_id)
	{
		return response()->json(['data' => Province::find($province_id)]);
	}
}
