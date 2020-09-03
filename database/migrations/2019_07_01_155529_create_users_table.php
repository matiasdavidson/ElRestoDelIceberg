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
            $table->bigIncrements('id');
            $table->string('email', 100)->unique()->nullable(false);
            $table->string('name', 45)->nullable(false);
            $table->string('lastname', 45)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->string('phone', 25)->unique()->nullable(false);
            $table->integer('role')->default(0)->nullable(false);
            $table->timestamps();
            $table->softDeletes();
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
