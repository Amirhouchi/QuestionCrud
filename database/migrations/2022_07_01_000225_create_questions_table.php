<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('questions')){
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_question');
            $table->string('nom_question');
            $table->string('text_question');
            $table->foreignId('id_secteur')->constrained('secteurs');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('questions',function(Blueprint $table){
        $table->dropForeign('id_secteur');
        });
        Schema::dropIfExists('questions');
    }
}
