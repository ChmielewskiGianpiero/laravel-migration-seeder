<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda', 20);
            $table->string('stazione_di_partenza', 20);
            $table->string('stazione_di_arrivo', 20);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->unsignedMediumInteger('codice_treno');
            $table->unsignedTinyInteger('numero_carrozze');
            $table->unsignedTinyInteger('in_orario')->default(1);
            $table->unsignedTinyInteger('cancellato')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
