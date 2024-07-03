<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $directus = app('directus');
        $postsResponse = $directus->get_items('posts', [
            'sort' => ['-date_created'],
            'limit' => 10
        ]);
        $posts = $postsResponse['data'];

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $directus = app('directus');
        $postResponse = $directus->get_items('posts', $id);
        $post = $postResponse['data'];
        return view('posts.show', compact('post'));
    }
}
