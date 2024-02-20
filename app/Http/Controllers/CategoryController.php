<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
            ->join('category', 'category.id', '=', 'posts.category')
            ->select('*')
            ->get();
        $data = [
            'posts' => $posts,
            // 'posts' => Post::latest()->get(),
            'category' => Category::latest()->get()

        ];
        // dd($data['posts']);
        return view('posts.index', compact('data'));
    }
    public function list($id)
    {
        $posts = DB::table('posts')
            ->join('category', 'category.id', '=', 'posts.category')
            ->select('*')
            ->where('category.id', $id)
            ->get();
        $data = [
            'posts' => $posts,
            // 'posts' => Post::latest()->get(),
            'category' => Category::latest()->get()

        ];
        // dd($data['posts']);
        return view('cat.list', compact('data'));
    }
}
