<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
// use App\Models\Category;
// use App\Models\User;

class PostController extends Controller
{


    public function index()
    {
        // dd(request('search'));
        // $posts = Post::latest();

        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //           ->orWhere('body','like','%' . request('search') . '%');
        // }
        // $title = '';
        // if (request('category')) {
        //     $category = Category::firstWhere('slug',request('category'));
        //     $title = ' in ' . $category->name;
        // }

        // if (request('author')) {
        //     $author = User::firstWhere('username',request('author'));
        //     $title = ' By ' . $author->name;
        // }
        return view('produk.esg', [
            // "title" => "All Posts" . $title,
            // "active" => 'posts',
            // "posts" => Post::all()
            // "posts" => Post::latest()->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            "posts" => Post::latest()->get()
            // "posts" => $posts->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Singel Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
