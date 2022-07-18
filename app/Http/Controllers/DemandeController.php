<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use App\Models\Question;
use App\Models\Choixrepense;
use App\Models\Demande;
use Faker\Core\Number;
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
        // dd($secteur);
        $questions =Question::orderBy('id_secteur','asc')->get();
        $secteurs =Secteur::orderBy('id','asc')->get();
        $choixrepenses =Choixrepense::orderBy('id_question','asc')->get();
        return view('demandepage',compact('questions','secteur','choixrepenses'));
    
    }
    
    public function suivant(Question $question, Secteur $secteur , Choixrepense $chxr, Question $question_actuel, Demande $localStorage) 


    {
        //dd($secteur);
        $questions =Question::orderBy('id_secteur','asc')->get();
        //$secteurs =Secteur::orderBy('id','asc')->get();
        $choixrepenses =Choixrepense:: where('id_question',$question->id)-> orderBy('id_question','asc')->get();

        Demande::create([
            "numero_demande"=>1,
            "id_secteur"=>$secteur->id,
            "id_question"=>$question_actuel->id, 
            "id_choixrepense"=>$chxr->id, 
            "id_user"=>1, 
           ]);

        return view('suivant',compact('questions','question','choixrepenses','secteur','chxr','question_actuel'));
        

        
    
    }


    public function store(Demande $demande){
        dd($demande);
      /*  $request->validate([
            "numero_demande"=>'required',
            "id_secteur"=>'required',
            "id_question"=>'required',
            "id_choixrepense"=>'required',
            "id_user"=>'required',
        ]);

       // Etudiant::create($request->all());
       Demande::create([
        "numero_demande"=>$request->nom,
        "id_secteur"=>$request->prenom,
        "id_question"=>$request->classe_id, 
        "id_choixrepense"=>$request->classe_id, 
        "id_user"=>$request->classe_id, 
       ]);
       return back()->with("success","Etudiant ajouter avec succè!");*/

    }



}
