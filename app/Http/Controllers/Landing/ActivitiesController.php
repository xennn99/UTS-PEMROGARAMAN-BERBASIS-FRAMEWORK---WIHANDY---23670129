<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class ActivitiesController extends Controller
{
    public function index()
    {
        return view('landing.activities');
    }
}