<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view('halaman/index');
    }
    function petunjuk()
    {
        return view('halaman/petunjuk');
    }
    function informasi()
    {
        return view('halaman/informasi');
    }
    function pengumuman()
    {
        return view('halaman/pengumuman');
    }
}
