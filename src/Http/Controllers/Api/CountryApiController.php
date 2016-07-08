<?php

namespace Jsdecena\MCPro\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Jsdecena\MCPro\Models\Country;

class CountryApiController extends Controller
{
	public function index()
	{
		return response()->json(['data' => Country::all()]);
	}

	public function show($id)
	{
		return response()->json(['data' => Country::find($id)]);
	}
}