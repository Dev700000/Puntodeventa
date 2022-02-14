<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selling', function (Blueprint $table) {
            $table->integer('idselling')->autoIncrement();
            $table->string('code',100);
            $table->integer('id_client');
            $table->index('id_client');
            $table->string('article');
            $table->string('subtotal');
            $table->string('total');
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
        Schema::dropIfExists('selling');
    }
}
