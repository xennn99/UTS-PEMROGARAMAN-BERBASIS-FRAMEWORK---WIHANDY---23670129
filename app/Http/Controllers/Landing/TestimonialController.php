<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('landing.testimonial-element');
    }
}