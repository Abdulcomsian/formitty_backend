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
        Schema::create('assessment_group_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessment_group_id')->constrained('assessment_groups')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('user_form_id');
            $table->unsignedBigInteger('response_id');
            $table->string('point');
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
        Schema::dropIfExists('assessment_group_points');
    }
};
