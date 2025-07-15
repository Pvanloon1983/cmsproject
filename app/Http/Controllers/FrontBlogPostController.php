<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class FrontBlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogPosts = BlogPost::where('published', '1')->with('user')->paginate(8);

        return view('blog.front-index', ['blogposts' => $blogPosts]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $blogPost = BlogPost::where('slug', $slug)->where('published', '1')->with('user')->firstOrFail();
        return view('blog.front-show', ['blogpost' => $blogPost]);
    }

}
