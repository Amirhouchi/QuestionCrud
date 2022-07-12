<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index(){

        $questions =Question::orderBy('id','asc')->get();
        return view('question', compact('questions'));
    }
}
