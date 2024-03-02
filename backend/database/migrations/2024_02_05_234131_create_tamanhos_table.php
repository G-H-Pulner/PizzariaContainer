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
        Schema::create('tamanho', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 255);
            $table->float('tamanho_em_cm', 10, 2);
            $table->float('preco_em_reais', 20, 2);

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamanho');
    }
};
