<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        $comics_count = Comic::count();

        return view('home', compact('comics_count'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
