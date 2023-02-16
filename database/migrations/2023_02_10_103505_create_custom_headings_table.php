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
        Schema::create('custom_headings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_form_id');
            $table->unsignedBigInteger('user_heading_id');
            $table->string('form_heading')->nullable();
            $table->string('custom_field')->nullable();
            $table->timestamps();

            $table->foreign('user_form_id')
                ->references('id')
                ->on('user_form')
                ->onDelete('cascade');
            $table->foreign('user_heading_id')
                ->references('id')
                ->on('user_form_headings')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_headings');
    }
};
