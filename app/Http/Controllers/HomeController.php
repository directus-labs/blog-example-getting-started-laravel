<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $directus = app('directus');
        $settingsResponse = $directus->get_items('global_settings');
        $settings = $settingsResponse['data'];
        return view('home', compact('settings'));
    }
}
