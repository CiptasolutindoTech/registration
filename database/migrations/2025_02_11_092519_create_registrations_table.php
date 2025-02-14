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
        $table->id();
        $table->string('nama')->nullable();
        $table->string('jenis_kelamin')->nullable();
        $table->text('alamat')->nullable();
        $table->string('perusahaan')->nullable();
        $table->string('email')->nullable();
        $table->string('telepon')->nullable();
        $table->string('asisteninstruktur')->nullable();
        $table->string('instruktur')->nullable();
        $table->string('instruktursenior')->nullable();
        $table->string('mastertrainer')->nullable();
        $table->integer('status')->default('0');
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
