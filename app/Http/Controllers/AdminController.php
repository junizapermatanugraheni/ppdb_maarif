<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('admin/index');
    }
    function input()
    {
        return view('admin/input_data');
    }
    function informasi_siswa()
    {
        return view('admin/informasi_siswa');
    }
    function laporan()
    {
        return view('admin/laporan');
    }
}
