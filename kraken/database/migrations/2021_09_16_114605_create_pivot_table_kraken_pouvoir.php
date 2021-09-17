<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableKrakenPouvoir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kraken_pouvoir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pouvoir_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('kraken_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('kraken_pouvoir');
    }
}
