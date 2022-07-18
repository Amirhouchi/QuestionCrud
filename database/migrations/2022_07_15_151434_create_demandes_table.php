<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('demandes')){ 
            Schema::create('demandes', function (Blueprint $table) {
                $table->id();
                $table->integer('numero_demande');
                $table->integer('id_secteur');
                $table->integer('id_question');
                $table->integer('id_choixrepense');
                $table->integer('id_user');

                $table->timestamps();
        });
    }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
