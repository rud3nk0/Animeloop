<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->id) {

            $post = Post::find($request->id);

            $post->image = asset('storage/images/' . $post->image);

            return response()->json($post, 200);

        } else {
            $posts = Post::all();

            foreach ($posts as $post){
                $post->image = asset('storage/images/' . $post->image);
            }

            return response()->json($posts, 200);
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

            $post = Post::find($request->deleteId);
            $post->delete();

            $response = [
                'data'=> 'все видалено'
            ];

            return response()->json($response, 200);
        }

        //операція оновлення
        if($request->updateId){

            $postId = Post::where('id', $request->updateId)->first();
            // dd($category);

            if($postId){
                $postId->name = $request->name;
                $postId->description = $request->description;
                $postId->image = $request->image;
                $postId->save();

                $response = [
                    'data'=> $postId
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
            $posts = Post::create([
                'name'=> $request->name,
                'description'=> $request->description,
                'image'=> $request->image,
            ]);

            return response()->json($posts, 200);
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
