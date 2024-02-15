<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\ncc;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nbcc', function (Request $request){
	try
	{
		//$id=$request["id"];
		$emp = ncc::create($request->all());
        $emp->save();
		$emp["status"]="ok";

		return response()->json($emp, 200);
	}
	catch(\Exception $k) {
		$error=array("status"=>"failed","error"=>$k->getMessage());
		return response()->json($error, 200);
	}
});

