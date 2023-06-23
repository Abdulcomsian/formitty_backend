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
        Schema::create('openai_responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->longText('note_response')->nullable();
            $table->longText('audio_response')->nullable();
            $table->foreign('form_id')->references('id')->on('user_form')->onDelete('cascade');
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
        Schema::dropIfExists('openai_responses');
    }
};
