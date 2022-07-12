<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoixrepensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('choixrepenses')){
        Schema::create('choixrepenses', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_choix_repense');
            $table->string('text_choix_repense');
            $table->integer('id_question_suivant');
            $table->integer('id_question');
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
        Schema::table('choixrepenses',function(Blueprint $table){
            $table->dropForeign('id_question');
            });
        Schema::dropIfExists('choixrepenses');
    }
}
