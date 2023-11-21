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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda' , 20);
            $table->string('Stazione di partenza' , 30);
            $table->string('Stazione di arrivo' , 30);
            $table->string('slug' , 20)->unique();
            $table->time('Orario di partenza' , $precision = 0);
            $table->time('Orario di arrivo' , 5);
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
