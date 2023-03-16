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
        Schema::create('flowchart_responses', function (Blueprint $table) {
            $table->id();
            /*$table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('assessment_tool_id')->constrained('assessment_tools')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('user_form_id');
            $table->foreignId('flowchart_question_id')->constrained('flowchart_questions')->cascadeOnDelete()->cascadeOnUpdate();*/
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('assessment_tool_id')->constrained('assessment_tools')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('user_form_id');
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
        Schema::dropIfExists('flowchart_responses');
    }
};
