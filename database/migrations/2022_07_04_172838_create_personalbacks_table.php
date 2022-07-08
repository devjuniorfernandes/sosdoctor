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
        Schema::create('personalbacks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_historic')->nullable();
            $table->string('dyslipidemias')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('hypertension')->nullable();
            $table->string('allergies')->nullable();
            $table->string('tobacco')->nullable();
            $table->string('alcohol')->nullable();
            $table->string('toxic')->nullable();
            $table->string('surgeries')->nullable();
            $table->string('traumatological')->nullable();
            $table->string('numberchildren')->nullable();
            $table->string('others')->nullable();
            $table->string('diuresis')->nullable();
            $table->string('evacuation')->nullable();
            $table->string('stresslevel')->nullable();
            $table->string('activity')->nullable();
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
        Schema::dropIfExists('personalbacks');
    }
};
