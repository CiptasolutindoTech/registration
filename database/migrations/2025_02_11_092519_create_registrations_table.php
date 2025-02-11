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
        Schema::create('registrations', function (Blueprint $table) {
        $table->string('nama');
        $table->string('jenis_kelamin');
        $table->text('alamat');
        $table->string('perusahaan');
        $table->string('email');
        $table->string('telepon');
        $table->string('asisteninstruktur');
        $table->string('instruktur');
        $table->string('instruktursenior');
        $table->string('mastertrainer');
        $table->integer('status');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
