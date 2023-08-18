<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id("cne");
            $table->string("cin");
            $table->string("NomPrenom");
            $table->boolean("sexe");
            $table->date("datenaiss");
            $table->string("inscription1");
            $table->string("inscription2");
            $table->boolean("licence")->nullable();
            $table->date("datelicence")->nullable();
            $table->Boolean("DEUG")->nullable();
            $table->date("DateDEUG")->nullable();
            $table->date("Anneeinsc");
            $table->string("situation")->nullable();
            $table->string("lieuNaiss");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('students');
    }
}
