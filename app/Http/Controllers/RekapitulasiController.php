<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapitulasiController extends Controller
{
    public function index()
    {
        return view('admin.laporan.rekapitulasi');
    }
}
