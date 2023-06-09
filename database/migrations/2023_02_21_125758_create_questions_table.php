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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->enum('type', ['multiple_choice', 'open_ended']);
            $table->foreignId('assessment_tool_id')->constrained('assessment_tools')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('assessment_group_id')->nullable()->constrained('assessment_groups')->cascadeOnDelete()->cascadeOnUpdate();
            $table->float('point')->nullable();
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
        Schema::dropIfExists('questions');
    }
};
