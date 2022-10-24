<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Chef_Departement');
            $table->string('Bloc');
            $table->string('Etage');
            $table->foreignId(column:'etablissement_id')
                ->constrained()
                ->onUpdate(action:'restrict')
                ->onDelete(action:'restrict');
            
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
        Schema::dropIfExists('departements');
    }
};
