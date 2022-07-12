<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use Illuminate\Http\Request;

class SecteurController extends Controller
{
    //
    public function index(){

        $secteurs =Secteur::orderBy('id','asc')->get();
        return view('secteur', compact('secteurs'));
    }
}
