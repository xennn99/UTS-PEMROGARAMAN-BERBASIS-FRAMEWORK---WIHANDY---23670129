<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('landing.contact');
    }
}