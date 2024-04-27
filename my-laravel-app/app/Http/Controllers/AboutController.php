<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Read data from JSON file
        $data = json_decode(file_get_contents(base_path('storage/dummy/about.json')), true);
        $data['foto'] = asset('storage/photos/' . $data['foto']); // Adjust path if needed
        return view('halaman-about', compact('data'));
    }
}
