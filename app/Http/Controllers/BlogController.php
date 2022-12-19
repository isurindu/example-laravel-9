<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::where('title', 'john')->get();
        return view('blogs.index', compact('posts'));
    }
    public function create()
    {
        return view('blogs.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
         'title'=>'required'
        ]);

        $blog = new Blog();
        //left db column | Right form input name
        $blog->title = $request->title;
        $blog->post = $request->post;
        $blog->save();
    }
}
