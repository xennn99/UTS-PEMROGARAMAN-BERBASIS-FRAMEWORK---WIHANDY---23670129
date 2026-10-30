<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SweetAlertController extends Controller
{
    public function index()
    {
        return view('admin.sweetalerts');
    }
}