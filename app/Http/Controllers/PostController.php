<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        //dd( $posts);
        return view('post.index',compact('posts'));
    }


    public function addPost()
    {
        return view('post.add');
    }


    public function storePost(Request $request)
    {
      //validation
      $request->validate([
           "titel" => "required",
           "description" => "required",
           "length"=>"required",
       ]);

      // create course object
        $post = new Post();
        $post->titel = $request->titel;
        $post->description = $request->description;
        $post->length = $request->length;

        $post->save();

        return redirect('posts')->with('status','post added successfully');
    }


    public function editPost($id)
    {
        $post = Post::findorFail($id);
        //dd($post);
        return view('post.edit',compact('post'));
    }


    public function updatePost(Request $request,$id)
    {
        $post_id = $request->id;

        Post::findorFail($post_id)->update([

            'titel' => $request->titel,
            'description' => $request->description,
            'length' => $request->length
         ]);

        return redirect('posts')->with('status','post updated successfully');

    }


    public function deletePost($id)
    {
        $post = Post::findorFail($id);

        Post::findorFail($id)->delete();

        return redirect('posts')->with('status','post deleted successfully');
    }
}
