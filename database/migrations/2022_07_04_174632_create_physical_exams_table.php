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
        Schema::create('physical_exams', function (Blueprint $table) {
            $table->id();
            $table->integer('id_historic')->nullable();
            $table->string('habit')->nullable();
            $table->string('skin')->nullable();
            $table->string('head')->nullable();
            $table->string('eyes')->nullable();
            $table->string('teeth')->nullable();
            $table->string('ears')->nullable();
            $table->string('face')->nullable();
            $table->string('neck')->nullable();
            $table->string('thyroid')->nullable();
            $table->string('ap_cardiovascular')->nullable();
            $table->string('ap_respiratory')->nullable();
            $table->string('ap_gi')->nullable();
            $table->string('ap_genitourinary')->nullable();
            $table->string('ap_osteoarticular')->nullable();
            $table->string('sns')->nullable();
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
        Schema::dropIfExists('physical_exams');
    }
};
