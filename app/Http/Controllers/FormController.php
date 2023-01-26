<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function inputdata()
    {
        return view('form/inputData');
    }
    function inputnilai()
    {
        return view('form/inputNilai');
    }
    function inputjurusan()
    {
        return view('form/inputJurusan');
    }
    function inputdokumen()
    {
        return view('form/inputDokumen');
    }
}
