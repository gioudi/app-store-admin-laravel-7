<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\City;
use App\Http\Resources\CityResource;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CityResource::collection(City::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city= City::create($request->all());
        //return response()->json($city, 201);
        return response()->json(['city'=>$city,'message' => 'City created successfully !!'],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cities = City::find($id);
        if($cities){
            return response()->json(['cities'=>$cities,'message' => 'success  !!'],200);
        }else {
            return response()->json([['error'=>'Unauthorized','message' => 'error !!'], 401]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities = City::find($id);
        if($cities){
            return response()->json(['cities'=>$cities,'message' => 'success  !!'],200);
        }else {
            return response()->json([['error'=>'Unauthorized','message' => 'error !!'], 401]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cities = City::findOrFail($id);
        $cities->update($request->all());
        return response()->json(['cities'=>$cities,'message' => 'updated!!'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return response()->json('City deleted successfully', 204);
    }
}
