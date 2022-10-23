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
        Schema::create('cours', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('modules_id')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            $table->string('nom_cours');
             $table->string('image_cours');

             $table->enum('typeCours', ['Tp', 'Td','Cours']);
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
        Schema::dropIfExists('cours');
    }
};
