<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('addressDescription', 50)->nullable(false);
            $table->string('streetName', 100)->nullable(false);
            $table->integer('streetNumber')->nullable(false);
            $table->string('apartmentNumber', 20)->nullable();
            $table->string('province', 20)->nullable(false);
            $table->string('city', 50)->nullable(false);
            $table->string('zipCode', 10)->nullable(false);
            $table->string('observations', 300)->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
