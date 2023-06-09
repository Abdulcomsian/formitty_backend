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
        Schema::create('flowchart_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flowchart_response_id')->constrained('flowchart_responses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('flowchart_question_id')->constrained('flowchart_questions')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('flowchart_answers');
    }
};
