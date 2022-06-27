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
        Schema::create('occurrences', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name_patients');
            $table->integer('phone_patients');
            $table->text('address_patients');
            $table->integer('age_patients');
            $table->text('subject');
            $table->text('description');
            $table->boolean('urgency');
            $table->integer('status');
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
        Schema::dropIfExists('occurrences');
    }
};
