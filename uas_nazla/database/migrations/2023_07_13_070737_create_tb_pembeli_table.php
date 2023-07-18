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
        Schema::create('tb_pembeli', function (Blueprint $table) {
            $table->increments('pembeli_id');
            $table->string('pembeli_nama');
            $table->string('pembeli_alamat');
            $table->string('pembeli_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pembeli');
    }
};
