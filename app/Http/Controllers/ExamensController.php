<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamensController extends Controller
{
    //
    public function index()
    {
        return view('examens.index');
    }

    public function add()
    {
        return view('examens.add');
    }
    
}
