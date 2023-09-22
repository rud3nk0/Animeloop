<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $user = User::find($request->id);

        if ($request->id)
        {
            $user = User::find($request->id);

            return response()-> json($user, 200);
        } else {

            $users = User::all();

            return response()-> json($users, 200);
        };
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
        // операція видаленя
        if($request->deleteId){

            $user = User::find($request->deleteId);
            $user->delete();

            $response = [
                'data'=> 'все видалено'
            ];

            return response()->json($response, 200);
        }

        //операція оновлення
        if($request->updateId){

            $userId = User::where('id', $request->updateId)->first();

            if($userId){
                $userId->name = $request->name;
                $userId->email  = $request->email ;

                $userId->save();

                $response = [
                    'data'=> $userId
                ];

                return response()->json($response, 200);
            } else {
                $response = [
                    'data'=> 'такого запису немає'
                ];

                return response()->json($response, 200);
            }

        } else {
            // операція створення
            $user = User::create([
                'name'=> $request->name,
                'email '=> $request->email ,
            ]);

            return response()->json($user, 200);
        }


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
