<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KenaikanController extends Controller
{
    public function index()
    {
        return view('admin.manajemen.kenaikan.index');
    }
}
