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
Route::get('/find/{id}', function ($id,Request $request){
	try
	{
		//$id=$request["id"];
		$emp = ncc::find($id);
		if($emp==null)
		{
			throw new Exception('Id Not Found');
		}

		$emp["status"]="ok";

		return response()->json($emp, 200);
	}
	catch(\Exception $k) {
		$error=array("status"=>"failed","error"=>$k->getMessage());
		return response()->json($error, 200);
	}
});


Route::get('/stm/{name}', function ($name,Request $request) {
    try
	{
   
//   $name=$request["name"];
      $ser = ncc::where('name', $name)->first();
  
      if($ser==null)
      {
          throw new Exception('Id Not Found');
      }

      $ser["status"]="ok";

      return response()->json($ser, 200);
  }
  catch(\Exception $k) {
      $error=array("status"=>"failed","error"=>$k->getMessage());
      return response()->json($error, 200);
  }
});
  

