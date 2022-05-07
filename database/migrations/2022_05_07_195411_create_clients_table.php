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

        Schema::create('executives',function (Blueprint $table)
        {
            $table->id();
            $table->string('dui')->unique();
            $table->string('category');
            $table->foreignId('user_id')->references('id')->on('users')
            ->comment('Relacion con tabla usuarios');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->double('amount',0.2);
            $table->string('direction');
            $table->string('phoneNumber')->unique();
            $table->foreignId('executive_id')->references('id')->on('executives')
            ->comment('Relacion con tabla ejecutivos');
            $table->softDeletes();
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
        Schema::dropIfExists('clients');
    }
};
