<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\voiceActings;
use Illuminate\Http\Request;

class voiceActingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $voiceActings = voiceActings::find($request->id);

        if ($request->id)
        {
            $voiceActing = voiceActings::find($request->id);

            return response()-> json($voiceActing, 200);
        } else {

            $voiceActing = voiceActings::all();

            return response()-> json($voiceActing, 200);
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
        // операція видаленя
        if($request->deleteId){

            $voiceActing = voiceActings::find($request->deleteId);
            $voiceActing->delete();

            $response = [
                'data'=> 'все видалено'
            ];

            return response()->json($response, 200);
        }

        //операція оновлення
        if($request->updateId){

            $voiceActingId = voiceActings::where('id', $request->updateId)->first();

            if($voiceActingId){
                $voiceActingId->name = $request->name;

                $voiceActingId->save();

                $response = [
                    'data'=> $voiceActingId
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
            $voiceActing = voiceActings::create([
                'name'=> $request->name,
            ]);

            return response()->json($voiceActing, 200);
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
