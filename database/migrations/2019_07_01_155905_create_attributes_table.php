<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('attributeName');
            $table->timestamps();
            $table->softDeletes();
            // $table->string('vitamina A', 20)->nullable();
            // $table->string('vitamina B', 20)->nullable();
            // $table->string('vitamina C', 20)->nullable();
            // $table->string('vitamina D', 20)->nullable();
            // $table->string('vitamina E', 20)->nullable();
            // $table->string('vitamina K', 20)->nullable();
            // $table->string('vitamina B12', 20)->nullable();
            // $table->string('acido Folico', 20)->nullable();
            // $table->string('hidratos Simples', 20)->nullable();
            // $table->string('hidratos Complejos', 20)->nullable();
            // $table->string('proteina Animal', 20)->nullable();
            // $table->string('proteina Vegetal', 20)->nullable();
            // $table->string('grasas MonoInsaturadas', 20)->nullable();
            // $table->string('grasas PoliInsaturadas', 20)->nullable();
            // $table->string('grasas Saturadas', 20)->nullable();
            // $table->string('fibra Soluble', 20)->nullable();
            // $table->string('fibra Insolubre', 20)->nullable();
            // $table->string('antioxidantes', 20)->nullable();
            // $table->string('cafeina', 20)->nullable();
            // $table->string('probioticos', 20)->nullable();
            // $table->string('prebioticos', 20)->nullable();
            // $table->string('calcio', 20)->nullable();
            // $table->string('selenio', 20)->nullable();
            // $table->string('potasio', 20)->nullable();
            // $table->string('zinc', 20)->nullable();
            // $table->string('fosforo', 20)->nullable();
            // $table->string('hierro', 20)->nullable();
            // $table->string('magnesio', 20)->nullable();
            // $table->string('sodio', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
