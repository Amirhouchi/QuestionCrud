<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use App\Models\Question;
use App\Models\Choixrepense;
use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    //
    public function index(){

        $secteurs =Secteur::orderBy('id','asc')->get();
        $questions =Question::orderBy('id_secteur','asc')->get();
        $choixrepenses =Choixrepense::orderBy('id_question','asc')->get();
        return view('demande', compact('secteurs','questions','choixrepenses'));
    }

    public function demande(Secteur $secteur) 
    {
        $questions =Question::orderBy('id_secteur','asc')->get();
        $secteurs =Secteur::orderBy('id','asc')->get();
        $choixrepenses =Choixrepense::orderBy('id_question','asc')->get();
        return view('demandepage',compact('questions','secteur','choixrepenses'));
    
    }
    
    public function suivant(Question $question,Secteur $secteur) 
    {
        $questions =Question::orderBy('id_secteur','asc')->get();
        $secteurs =Secteur::orderBy('id','asc')->get();
        $choixrepenses =Choixrepense::orderBy('id_question','asc')->get();
        return view('suivant',compact('questions','secteurs','choixrepenses','secteur'));
    
    }


}
