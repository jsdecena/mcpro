<?php

namespace Jsdecena\MCPro\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Jsdecena\MCPro\Models\Country;
use Jsdecena\MCPro\Models\Province;

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