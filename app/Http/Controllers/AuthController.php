<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class AuthController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if ($validator->failed()){
            return response()->json(['status_code'=>400, 'message'=>'Bad Request']);
        }
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)){
            return response()->json(['status_code'=>403, 'message'=>'Unauthorized']);
        }
//        if (!Hash::check($credentials)){
//            return response()->json(['status_code'=>403, 'message'=>'Unauthorized']);
//        }
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('auth_token')->plainTextToken;
        $response = [
            'user'=>$user,
            'token'=>$token,
            'status_code'=>200
        ];
        return response()->json($response);
    }
    public function Addregister(Request $req){
        $validator = Validator::make($req->all(), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'role'=>'required'
        ]);
        if ($validator->failed()){
            return response()->json(['status_code'=>400, 'message'=>'Bad Request']);
        }
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->role = $req->role;
        $user->save();

//        event(new Registered($user));

        return response()->json([
            'status_code'=>200,
            'message'=> 'User Created Successfully'
        ]);
    }
    public function viewAllusers()
    {
        $role = [2,3];
        $users = User::whereIn('role', $role)->get();
        return response()->json([

            'users'=> $users,
            'status_code'=>200,
        ]);
    }
    public function DeleteUser($id){
        $user = DB::table('users')->delete($id);
        return response()->json(['success'=>'User deleted']);
    }
    public function EditUser($id){
        $user = User::where('id',$id)->first();

        return response()->json($user);
    }
    public function changevalue(Request $request, $id)
    {

        $u = User::where('id',$id)->first();
        dd($request->name);
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = $request->password;
        $u->role = $request->role;
        $u->save();
        return response()->json(['success'=>'Update Employee']);
    }
    public function edit(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'phone'=>'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email_verified_at'=>'date_format:Y-m-d H:i:s'
        ]);
        if ($validator->failed()){
            return response()->json(['status_code'=>400, 'message'=>'Bad Request']);
        }
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($request->phone){
            $user->phone = $request->phone;
        }
        $user->update();
    }
    public function logout(Request $request)
    {
        //
        // Get user who requested the logout
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status_code'=>200,
            'message'=> 'Token Deleted Successfully'
        ]);
    }
}
