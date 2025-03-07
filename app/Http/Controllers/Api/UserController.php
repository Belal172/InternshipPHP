<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {//without using the resource 
        //return response()->json(User::all());
        $user = User::get();
        if ($user->count() > 0) {
            return UserResource::collection($user);
        } else {
            return response()->json(['message' => 'no records available']);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name' => 'required ',
            'email' => 'required |email',
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>'all fields are required',
                'error'=> $validator->messages(),
            ],422);
        }
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>$request->password
        ]);
        return response()->json([
            'message' => 'user is created successfully',
            'data' => new UserResource($user)

        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validator=Validator::make($request->all(),[
            'name' => 'required ',
            'email' => 'required |email',
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>'all fields are required',
                'error'=> $validator->messages(),
            ],422);
        }
       
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>$request->password
        ]);
        return response()->json([
            'message' => 'user is updated successfully',
            'data' => new UserResource($user)

        ], 200);
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'user is deleted successfully',
         

        ], 200);

    }
}
