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
        Schema::create('events', function (Blueprint $table) {
            $table->id("id");
            $table->string("nom");
            $table->string("type");
            $table->date("date");
            $table->time("time");
            $table->integer("nbPersonnes");
            $table->integer("nbPersonnesMax");
            $table->string("lieu");
            //ManyToOne(events->club)
            $table->foreignId("club_id")->constrained("clubs")->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
};
