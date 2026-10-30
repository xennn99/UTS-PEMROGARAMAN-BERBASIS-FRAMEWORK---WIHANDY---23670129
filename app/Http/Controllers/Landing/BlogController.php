<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('landing.blog');
    }
}