<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('nis')->unique()->nullable();
            $table->string('nama',50)->nullable();
            $table->char('kelas',20)->nullable();
            $table->string('jurusan',50)->nullable();
            $table->string('tempat_pkl',50)->nullable();
            $table->char('no_telp',15)->nullable();
            $table->string('username',30)->unique();
            $table->string('password');
            $table->enum('level',['Admin','Pembimbing','Siswa']);
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
        Schema::dropIfExists('users');
    }
}
