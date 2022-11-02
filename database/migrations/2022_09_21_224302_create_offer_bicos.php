<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferBicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_bicos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_bico');
            $table->string('id_user');
            $table->mediumText('description');
            $table->double('price', 8, 2);
            $table->enum('status', ['A', 'C', 'F'])->default('A'); // Aberto, Cancelado, Fechado
            $table->timestamps();

            $table->foreign('id_bico')->references('id')->on('bicos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_bicos');
    }
}
