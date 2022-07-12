<?php

namespace App\Http\Controllers;

use App\Models\Choixrepense;
use Illuminate\Http\Request;

class ChoixrepenseController extends Controller
{
    //
    public function index(){

        $choixrepenses =Choixrepense::orderBy('id_question','asc')->get();
        return view('choixrepense', compact('choixrepenses'));
    }
}
