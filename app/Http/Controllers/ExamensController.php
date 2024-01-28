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

    public function add(Request $request)
    {
        $editMode = false;
        return view('examens.add',compact('editMode'));
    }
    public function edit(Request $request)
    {
        $exam = [
            'examen' => 'Static Exam Title',
            'description' => 'Static Exam Description',
            'date_debut' => '2024-01-01T00:00',
            'date_fin' => '2024-01-02T00:00', 
        ];
        $editMode = true;

        return view('examens.edit', compact('exam', 'editMode'));
    }



}
