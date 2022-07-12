<?php
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoixrepenseController;
use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {return view('welcome');})->name("home");

Route::get("/questions", [QuestionController::class,"index"])->name("questions");
Route::get("/secteurs", [SecteurController::class,"index"])->name("secteurs");
Route::get("/choixrepenses", [ChoixrepenseController::class,"index"])->name("choixrepenses");
Route::get("/demandes", [DemandeController::class,"index"])->name("demandes");



Route::get("/demande/{secteur}", [DemandeController::class,"demande"])->name("demande.demande");
Route::get("/question/{question}", [DemandeController::class,"suivant"])->name("suivant.suivant");
//Route::get("/etudiant/{etudiant}", [EtudiantContoller::class,"edit"])->name("etudiant.edit");



//Route::get("/etudiant/create", [EtudiantContoller::class,"create"])->name("etudiant.create");

//Route::post("/etudiant/create", [EtudiantContoller::class,'store'])->name("etudiant.ajouter");

//Route::delete("/etudiant/{etudiant}", [EtudiantContoller::class,'delete'])->name("etudiant.supprimer");

//Route::put("/etudiant/{etudiant}", [EtudiantContoller::class,'update'])->name("etudiant.update");
