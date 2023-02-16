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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_field_id')->nullable();
            $table->foreign('form_field_id')->references('id')->on('form_fields')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('form_heading_id')->nullable();
            $table->foreign('form_heading_id')->references('id')->on('form_headings')->onDelete('cascade');
            $table->unsignedBigInteger('user_form_heading_id')->nullable();
            $table->foreign('user_form_heading_id')->references('id')->on('user_form_headings')->onDelete('cascade');
            $table->string('name');
            $table->string('value',500)->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
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
        Schema::dropIfExists('form_data');
    }
};
