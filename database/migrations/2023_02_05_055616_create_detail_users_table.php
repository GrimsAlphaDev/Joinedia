<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            // connect with users table
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // connect with universities table
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');
            $table->string('nim')->unique()->nullable();
            $table->string('nip')->unique()->nullable();
            $table->string('no_ijazah')->unique()->nullable();
            $table->string('no_keanggotaan')->unique()->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp')->unique();
            $table->string('dosen_prodi')->nullable();
            $table->string('nama_himauk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_users');
    }
};
