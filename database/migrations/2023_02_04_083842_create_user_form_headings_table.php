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
        Schema::create('user_form_headings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('heading_id');
//            $table->foreign('form_heading_id')->references('id')->on('form_headings')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->foreign('user_form_id')->references('id')->on('user_form')->onDelete('cascade');
            $table->unsignedBigInteger('user_form_id');
            $table->enum('heading_type', ['predefined', 'custom', 'assessment_tool'])->default('predefined');
            $table->enum('heading_status', ['saved', 'completed'])->default('saved');
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
        Schema::dropIfExists('user_form_headings');
    }
};
