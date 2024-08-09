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
        Schema::create('hadiahs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tipe_hadiah_id');
            $table->uuid('toko_id');

            $table->string('kode');
            $table->string('penerimaan')->comment("1 = Terima, 0 = Tolak")->nullable();
            $table->timestamp('tgl_penerimaan')->nullable();
            $table->string("alasan_tolak")->nullable();

            $table->foreign('tipe_hadiah_id')->references('id')->on('tipe_hadiahs')->cascadeOnDelete();
            $table->foreign('toko_id')->references('id')->on('tokos')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hadiahs');
    }
};
