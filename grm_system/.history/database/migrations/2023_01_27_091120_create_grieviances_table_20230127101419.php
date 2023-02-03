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
        Schema::create('grieviances', function (Blueprint $table) {
            $table->id();
            $table->string('zone');
            $table->string('state');
            $table->string('lga');
            $table->string('ward');
            $table->string('community');
            $table->string('beneficiary');
            $table->string('name');
            $table->string('gender');
            $table->integer('phone');
            $table->string('zone');
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
        Schema::dropIfExists('grieviances');
    }
};
