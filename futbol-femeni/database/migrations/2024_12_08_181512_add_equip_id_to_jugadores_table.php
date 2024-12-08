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
        Schema::table('jugadores', function (Blueprint $table) {
            $table->foreignId('equip_id')->nullable()->constrained('equips')->onDelete('cascade'); // Agregar "equip_id"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('jugadores', function (Blueprint $table) {
            $table->string('equip'); // Restaurar la columna "equip"
            $table->dropForeign(['equip_id']); // Eliminar la clave foránea
            $table->dropColumn('equip_id'); // Eliminar la columna "equip_id"
        });
    }
};
