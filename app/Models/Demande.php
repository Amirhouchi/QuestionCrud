<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable =["numero_demande","id_secteur","id_question","id_choixrepense","id_user"];
    use HasFactory;
}
