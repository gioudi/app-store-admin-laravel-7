<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class UsersController extends Controller
{
    public function index(){
        return UserResource::collection(User::paginate(10));
    }

    public function show($id){
        $user = User::find($id);
        if($user){
            return response()->json(['user'=>$user,'message' => 'success  !!'],200);
        }else {
            return response()->json([['error'=>'Unauthorized','message' => 'error !!'], 401]);
        }
    }
    public function edit($id){
        $user = User::find($id);
        if($user){
            return response()->json(['user'=>$user,'message' => 'success  !!'],200);
        }else {
            return response()->json([['error'=>'Unauthorized','message' => 'error !!'], 401]);
        }
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['user'=>$user,'message' => 'updated!!'],200);
      
    }

    public  function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json('User deleted successfully', 204);

    }
}
