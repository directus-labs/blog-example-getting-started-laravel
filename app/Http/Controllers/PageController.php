<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        $directus = app('directus');
        $pageResponse = $directus->get_items('pages', [
            'filter' => ['slug' => $slug]
        ]);
        $page = $pageResponse['data'][0];
        return view('page', compact('page'));
    }
}
