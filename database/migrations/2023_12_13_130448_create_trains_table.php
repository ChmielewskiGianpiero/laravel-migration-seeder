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
            $table->string('Azienda', 20);
            $table->string('Stazione di partenza', 20);
            $table->string('Stazione di arrivo', 20);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->unsignedMediumInteger('Codice treno');
            $table->unsignedTinyInteger('Numero carrozze');
            $table->unsignedTinyInteger('In orario')->default(1);
            $table->unsignedTinyInteger('Cancellato')->default(0);
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
