<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if(Auth::attempt(['email' =>$request->email, 'password' => $request->password])){
            $user = $request->user();
            $data['token'] = $user->createToken('MyApp')->accessToken;
            if($request->remeber_me){
                $data['token']->save();
            }
            $data['name'] = $user->name;
            //return response()->json($data, 200);
            return response()->json([$data,'message' => 'success login !!'], 200);



        }

        return response()->json(['error'=>'Unauthorized','message' => 'error login !!'], 401);
    }

    public function register(Request $request){


        $validator= Validator::make( $request->all(),[
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required|min:6|same:password'
        ]);




        if($validator->fails()){
          return response()->json(['error'=>$validator->errors(),'message' => 'error register !!'],401);
        }

        $user= $request->all();
        $user['password'] = Hash::make($user['password']);
        $user = User::create($user);
        $accessToken = $user->createToken('MyApp')->accessToken;



        $success['name'] = $user->name;
        $user['api_token']=Str::random(40);
        return response()->json(['success'=>$user, 'access_token'=>$accessToken,'message'=> 'success register'],200);

    }

    
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }


}
