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
        Schema::table('partits', function (Blueprint $table) {
            if (!Schema::hasColumn('partits', 'equip_local_id')) {
                $table->foreignId('equip_local_id')->after('id')->constrained('equips');
            }
    
            if (!Schema::hasColumn('partits', 'equip_visitant_id')) {
                $table->foreignId('equip_visitant_id')->after('equip_local_id')->constrained('equips');
            }
    
            if (!Schema::hasColumn('partits', 'data')) {
                $table->dateTime('data')->after('equip_visitant_id');
            }
    
            if (!Schema::hasColumn('partits', 'resultat')) {
                $table->string('resultat')->after('data');
            }
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partits');
    }
};
