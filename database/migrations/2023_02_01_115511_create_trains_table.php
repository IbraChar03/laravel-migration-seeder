<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("agency", 32);
            $table->tinyInteger("carriages_number")->unsigned();
            $table->string("code", 10)->unique();
            $table->boolean("in_time")->default(true);
            $table->boolean("cancelled")->default(false);
            $table->date("departure_time");
            $table->date("arrival_time");
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
        Schema::dropIfExists('trains');
    }
};