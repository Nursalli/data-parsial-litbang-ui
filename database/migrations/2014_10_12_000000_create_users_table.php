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
            $table->string('nip',20)->unique();
            $table->string('nama');
            $table->string('email',100)->unique();
            $table->string('noTelepon',12);
            $table->string('foto');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',100)->unique();
            $table->string('password');
            $table->enum('role',['Admin OPD','Admin Ketua OPD', 'Super Admin','Admin Utama']);
            $table->enum('lingkup',['Provinsi']); //perbaiki nanti
            $table->string('namaOPD')->nullable();
            $table->enum('akses',['Aktif', 'Non Aktif']);
            $table->rememberToken();
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
