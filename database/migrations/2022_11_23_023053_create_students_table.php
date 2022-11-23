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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('registration')->unique()->comment('matricula');
            $table->string('shift')->comment('turno');
            $table->string('home_school')->comment('escola origem');
            $table->unsignedInteger('school_year')->comment('ano letivo');
            $table->boolean('has_disabled')->default(false)->comment('pnr');
            $table->string('desc_disabled')->nullable()->comment('desc pnr');
            $table->boolean('allergy')->default(false)->comment('alergia');
            $table->string('desc_allergy')->nullable()->comment('desc alergia');
            $table->string('number_brothers')->default(0)->comment('qtd irmaos');
            $table->foreignId('people_id');

            $table->foreign('people_id')->references('id')->on('peoples')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('students');
    }
};
