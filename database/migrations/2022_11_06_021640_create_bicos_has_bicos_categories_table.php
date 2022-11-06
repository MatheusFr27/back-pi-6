<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBicosHasBicosCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bicos_has_bicos_categories', function (Blueprint $table) {
            $table->string('id_bico');
            $table->string('id_bico_category');

            $table->foreign('id_bico')->references('id')->on('bicos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_bico_category')->references('id')->on('bicos_category')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bicos_has_bicos_categories');
    }
}
