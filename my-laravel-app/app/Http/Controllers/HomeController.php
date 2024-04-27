<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Read data from JSON file
        $data = json_decode(file_get_contents(base_path('storage/dummy/article.json')), true);

        return view('halaman-home', compact('data'));
    }
}
