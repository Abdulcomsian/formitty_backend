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
{
Schema::create('flowchart_responses', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
        $table->foreignId('assessment_tool_id')->constrained('assessment_tools')->cascadeOnDelete()->cascadeOnUpdate();
        $table->unsignedBigInteger('user_form_id');
        $table->foreignId('flowchart_response_id')->constrained('flowchart_responses')->cascadeOnDelete()->cascadeOnUpdate();
        $table->timestamps();
    });
} public function up()


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flow_chart_responses');
    }
};
