<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailIndexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_indexes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('books_id');
            $table->unsignedBigInteger('inverted_books_id');
            $table->integer('freq')->default(0);
            $table->double('weight')->nullable();

            $table->foreign('books_id')->references('id')->on('books');
            $table->foreign('inverted_books_id')->references('id')->on('inverted_books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_indexes');
    }
}
