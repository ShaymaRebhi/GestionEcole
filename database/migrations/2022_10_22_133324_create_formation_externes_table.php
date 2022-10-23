<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CentreFormation;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_externes', function (Blueprint $table) {
         //   $table->engine = 'InnoDB';
            $table->id();
            $table->string('Nom');
            $table->integer('Duree');
            $table->string('ObjectifGlobale');
            $table->date('DateDebut');
            $table->date('DateFin');
            $table->foreignId('centre_formations_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
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
        Schema::dropIfExists('formation_externes');
    }
};
