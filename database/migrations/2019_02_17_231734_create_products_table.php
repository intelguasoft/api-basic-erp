<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('short_description', 250);
            $table->string('long_description', 500)->nullable();

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('tax_id')->unsigned();
            $table->foreign('tax_id')->references('id')->on('taxes');

            $table->integer('measure_id')->unsigned();
            $table->foreign('measure_id')->references('id')->on('measures');

            $table->decimal('measure', 8, 2);
            $table->decimal('price', 8, 2);
            $table->string('photo', 400)->nullable();
            $table->string('notes', 500)->nullable();
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
        Schema::dropIfExists('products');
    }
}
