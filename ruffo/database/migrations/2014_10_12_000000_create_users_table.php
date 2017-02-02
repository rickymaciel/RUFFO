<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->integer('documento')->unsigned();
            $table->string('direccion', 255);
            $table->string('imagen', 255);
            $table->integer('nrofuncionario')->unsigned();
            $table->string('telefono', 100);
            $table->integer('oficina_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->string('email', 100)->unique();
            $table->string('password');
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
