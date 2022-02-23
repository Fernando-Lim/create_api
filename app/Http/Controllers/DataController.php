<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DataController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'password' => 'required',
            'name_pc' => 'required',
            'timestamp' => 'required',
        ]);

        
        if(Hash::check($request->password, '$2a$12$MI2vIRn8R5OzupCrqPfvBu9uG/KrMuJKOr./OdXrtlK/LlxHX5o56')){
            if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
            }
            $data = "OK";
            return response()->json(compact('data'), 200);

        }else{
            $data = "Wrong Password";
            return response()->json(compact('data'), 200);
        }
    }

    public function break(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'timestamp' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $data = "OK";
        return response()->json(compact('data'), 200);
    }

    public function lainnya(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'reason' => 'required',
            'timestamp' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $data = "OK";
        return response()->json(compact('data'), 200);
    }

    public function signout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'timestamp' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $data = "OK";
        return response()->json(compact('data'), 200);
    }
}
