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
        Schema::create('historics', function (Blueprint $table) {
            $table->id();
            $table->string('name_patients');
            $table->string('gender_patients');
            $table->string('bi_patients');
            $table->string('number_patients');
            $table->string('address_patients');
            $table->string('local_patients');
            $table->string('birth_date_patients');
            $table->string('civil_status_patients')->nullable();
            $table->string('spouse_patients')->nullable();
            $table->string('parents_patients')->nullable();
            $table->string('profission_patients')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('historics');
    }
};
