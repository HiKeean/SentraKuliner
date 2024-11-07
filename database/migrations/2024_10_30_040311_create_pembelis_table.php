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
        Schema::create('pembelis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('idUser');
            $table->string('nama_kantor');
            $table->string('lantai');
            $table->string('nomor_kantor');
            $table->boolean('gotitip')->default(0);
            $table->timestamp('gotitip_created')->nullable();
            $table->timestamp('gotitip_updated')->nullable();
            $table->boolean('gotitip_act')->default(0);
            $table->timestamp('gotitip_activated')->nullable();
            $table->integer('idComplained')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelis');
    }
};
