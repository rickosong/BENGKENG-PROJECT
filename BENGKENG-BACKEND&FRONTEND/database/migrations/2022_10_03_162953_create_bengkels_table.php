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
        Schema::create('bengkels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('namabengkel', 100);
            $table->text('deskripsi');
            $table->text('alamat');
            $table->text('layananjasa');
            $table->string('phonenumber');
            $table->foreignId('jenisbengkel_id')->constrained('allbengkel');
            $table->foreignId('status_id')->constrained('status');
            $table->string('maps');
            $table->string('image');
            $table->string('views');
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
        Schema::dropIfExists('bengkels');
    }
};
