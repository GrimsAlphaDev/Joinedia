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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            // connect with detail_users table
            $table->foreignId('detail_user_id')->constrained('detail_users')->onDelete('cascade');
            // connect with universities table
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');            
            $table->string('nama_event');
            $table->string('deskripsi');
            $table->string('image');
            $table->string('tempat');
            $table->string('kategori');
            $table->string('tanggal');
            $table->integer('quota');
            $table->string('status');
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
        Schema::dropIfExists('events');
    }
};
