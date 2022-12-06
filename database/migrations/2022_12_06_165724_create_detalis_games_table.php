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
        Schema::create('detalis_Games', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('img');
 
            $table->foreignId('games_id')
            ->constrained('games')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('detalis_games');
    }
};
