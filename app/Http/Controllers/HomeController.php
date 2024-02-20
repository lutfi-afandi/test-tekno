<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $posts = DB::table('posts')
            ->join('category', 'category.id', '=', 'posts.category')
            ->select('*')

            ->select('posts.*', 'category.nama')
            ->get();
        $data = [
            'posts' => $posts,
            // 'posts' => Post::latest()->get(),
            'category' => Category::latest()->get()

        ];
        return view('index', compact('data'));
    }

    public function edit($id)
    {
        // $post = Post::findOrFail($id);
        $post = DB::table('posts')
            ->join('category', 'category.id', '=', 'posts.category')
            ->select('posts.*', 'category.nama')
            ->where('posts.id', $id)
            ->get();
        dd($post);

        // $posts = $post;

        return view('detail', compact('post'));
    }
    public function detail($id)
    {
        // $post = Post::findOrFail($id);
        $posts = DB::table('posts')
            ->join('category', 'category.id', '=', 'posts.category')
            ->select('*')
            ->where('posts.id', $id)
            ->get();

        $post = $posts[0];
        // dd($post[0]->title);

        return view('detail', compact('post'));
    }
}
