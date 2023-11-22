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
            $table->string('Azienda' , 100);
            $table->string('Stazione_di_partenza' , 100);
            $table->string('Stazione_di_arrivo' , 100);
            $table->string('slug' , 100)->unique();
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->Integer('Codice_treno')->unsigned();
            $table->Integer('Numero_di_carrozze');
            $table->boolean('In_orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
