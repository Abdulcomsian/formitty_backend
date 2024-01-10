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
        Schema::table('speech_text', function (Blueprint $table) {
            $table->string('operation_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speech_text', function (Blueprint $table) {
            if (Schema::hasColumn('speech_text', 'operation_name')){
                $table->dropColumn('operation_name');
            }
        });
    }
};
