<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost()
    {
        return view ('add-post');
    }

    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back ()->with('post_created','Berhasil Ditambahkan');
    }

    public function getPost()
    {
        $posts = Post::orderBy('id','DESC')->get();
        return view ('post', compact('posts'));
    }


    public function editPost($id)
    {
        $post = Post::find($id);
        // dd ($post);

        return view('edit-post', compact('post'));

    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return back()->with('post_created','Berhasil Diupdate');
        
    }

    public function delete(Request $request, $id)
    {
        $post = Post::find($id);
        $post->delete($request->all());
        return back()->with('post_created','Berhasil Dihapus');
    }


}
