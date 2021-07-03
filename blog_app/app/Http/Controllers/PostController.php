<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image'
        ]);

        if ($validator->fails())
        {
            return back()->with('status','You have to fill all fields');
        }
        else
        {
            $image_name =time().".".$request->thumbnail->extension();
            $request->thumbnail->move(public_path('thumbnails'),$image_name);
            Post::create([
                'user_id' => Auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'thumbnail' =>$image_name
            ]);
        }
        return redirect(route('posts.all'))->with('status','Post created Successfully!');
    }

    public function show($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.show',compact('post'));
    }

    public function edit($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.update',compact('post'));
    }

    public function update($postId,Request $request)
    {
        Post::findOrFail($postId)->update($request->all());
        return redirect(route('posts.all'))->with('status','Post updated!');
    }

    public function delete($postId)
    {
        Post::findOrFail($postId)->delete();
        return redirect(route('posts.all'));
    }
}
