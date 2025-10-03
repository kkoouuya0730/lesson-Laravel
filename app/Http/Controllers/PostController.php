<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 一覧
    public function index() {
        $posts = Post::with('user')->get();
        return response()->json($posts);
    }

    // 作成
    public function store(Request $request)
    {
        // バリデーション
        $validation = $request->validate([
            'title' => 'required|max:255',
            'content' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ]);

        // データ保存
        $post = Post::create($validation);

        return response()->json($post, 201);
    }

    // 詳細
    public function show(Post $post)
    {
        $post->load('user');
        return response()->json($post);
    }

    // 更新
    public function update(Request $request, Post $post)
    {
        // バリデーション
        $validation = $request->validate([
            'title' => 'required|max:255',
            'content' => 'nullable|string',
        ]);

        // データ更新
        $post->update($validation);

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}
