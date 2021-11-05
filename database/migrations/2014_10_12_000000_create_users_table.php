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
            $table->id(); //sudah ada bawwan laravel
            $table->string('name');//sudah ada bawwan laravel
            $table->string('email')->unique();//sudah ada bawwan laravel
            $table->timestamp('email_verified_at')->nullable();//sudah ada bawwan laravel
            $table->string('password')->nullable();//di set nullable karena nanti kita akan pakai OAuth
            $table->string('avatar')->nullable(); //di set nullable karena admin nanti tidak punya avatar | ini field tambahan 
            $table->string('occupation')->nullable(); //di set nullable karena admin nanti tidak punya occupation | ini field tambahan 
            $table->boolean('is_admin')->default(false); //di set defaultnya false karena untuk user biasa
            $table->rememberToken();
            $table->timestamps(); // created at, updated at
            $table->softDeletes(); //tambahan untuk menggunakan fitur bawaan laravel softDeletes
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
