<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        $allPosts = Post::all();
        return view('posts', [
            "allPosts"=>$allPosts
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post', [
            "post"=>$post
        ]);
    }

    public function create()
    {
        return view('create_post');
    }

    public function store()
    {
        $pureData = request()->validate([
            'author'=>'required',
            'title'=>'required',
            'body'=>'required'
        ]);

        $allData = request()->all();
        $post = new Post();
        $post->author = request('author');
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        
        return redirect('/posts')->with('create', "Post CREATED!");
    }

    public function edit(Post $post)
    {
        return view('edit_post', compact('post'));
    }

    public function update(Post $post)
    {
        $post->update(request()->validate([
            'author'=>'required',
            'title'=>'required',
            'body'=>'required'
        ]));

        return redirect('/post/'.$post->id)->with('update', "Post UPDATED!"); 
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect('/posts/')->with('delete', "Post DELETED!");
    }
}
