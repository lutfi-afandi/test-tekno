<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        $posts = DB::table('posts')
            ->join('category', 'category.id', '=', 'posts.category')
            ->select('posts.*', 'category.nama')
            ->get();
        $data = [
            'posts' => $posts,
            // 'posts' => Post::latest()->get(),
            'category' => Category::latest()->get()

        ];
        // dd($data['posts']);
        return view('posts.index', compact('data'));
    }

    public function create()
    {
        $category = Category::latest()->get();
        return view('posts.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:155',
            'body' => 'required',
            'category' => 'required'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $request->category,
            'category' => $request->category,
            // 'slug' => Str::slug($request->title)
        ]);

        // dd($post);

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Postingan berhasil di simpan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Gagal menyimpan postingan'
                ]);
        }
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('post.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

    public function edit1($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function edit($id)
    {
        // $post = Post::findOrFail($id);
        $posts = DB::table('posts')
            ->join('category', 'category.id', '=', 'posts.category')
            ->select('posts.*', 'category.nama')
            ->where('posts.id', $id)
            ->get();

        $post = $posts[0];
        // dd($post[0]->title);
        $data = [
            'post' => $post,
            // 'posts' => Post::latest()->get(),
            'category' => Category::latest()->get()

        ];

        return view('posts.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:155',
            'body' => 'required',
            'category' => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
        ]);

        if ($post) {
            return redirect()
                ->route('post.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
}
