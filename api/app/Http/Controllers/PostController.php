<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('Post.listPost', ['posts' =>$posts]);
    }

    public function store(Request $request){
       $data =  $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $data['image'] = $imageName;

            $request->image->move(public_path('storage/images'), $imageName);
        }


        Post::create($data);

        $posts = Post::all();
        return view('Post.listPost', ['posts'=>$posts]);
    }

    public function update(Request $request, $id){
        $postId = Post::where('id', $id)->first();

        if ($postId){
            $postId->name = $request->name;
            $postId->image = $request->image;
            $postId->description = $request->description;
            $postId->category_id = $request->category_id;

            $postId->save();
        }

        $posts = Post::all();
        return view('Post.listPost', ['posts' => $posts]);
    }

    public function destroy($id){
        $post = Post::find($id);
        if ($post) {
            $post->delete();
        }
        $posts = Post::all();
        return view('Post.listPost', ['posts' => $posts]);
    }

}
