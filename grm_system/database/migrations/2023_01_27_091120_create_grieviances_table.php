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
            $table->string('nsr_no');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('desc');
            $table->string('category');
            $table->string('sub_category');
            $table->string('cmode');
            $table->string('resolved');
            $table->string('res_comment');
            $table->string('track');
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
