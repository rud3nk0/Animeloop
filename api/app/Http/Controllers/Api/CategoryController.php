<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->id) {

            $category = Category::find($request->id);

            return response()->json($category, 200);

        } else {
            $categories = Category::all();

            return response()->json($categories, 200);
        }

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
        // операція видаленя
        if($request->deleteId){

            $category = Category::find($request->deleteId);
            $category->delete();

            $response = [
                'data'=> 'все видалено'
            ];

            return response()->json($response, 200);
        }

        //операція оновлення
        if($request->updateId){

            $categoryId = Category::where('id', $request->updateId)->first();
            // dd($category);

            if($categoryId){
                $categoryId->name = $request->name;
                $categoryId->save();

                $response = [
                    'data'=> $categoryId
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
            $categories = Category::create([
                'name'=> $request->name
            ]);

            return response()->json($categories, 200);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
