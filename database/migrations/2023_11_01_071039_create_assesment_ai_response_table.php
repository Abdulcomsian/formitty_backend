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
        Schema::create('assesment_ai_response', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assesment_tool_id');
            $table->unsignedBigInteger('response_id')->nullable();
            $table->unsignedBigInteger('user_form_heading_id')->nullable();
            $table->longText('assesment_questions');
            $table->longText('assesment_openai_response');
            $table->foreign('assesment_tool_id')->references('id')->on('assessment_tools')->onDelete('cascade');
            $table->foreign('response_id')->references('id')->on('responses')->onDelete('cascade');
            $table->foreign('user_form_heading_id')->references('id')->on('user_form_headings')->onDelete('cascade');
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
        Schema::dropIfExists('assesment_ai_response');
    }
};
