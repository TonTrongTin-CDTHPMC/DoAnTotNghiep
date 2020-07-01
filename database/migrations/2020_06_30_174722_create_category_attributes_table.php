<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('primary_category_id');
            $table->string('name');
            $table->string('input_type');
            $table->json('options');
            $table->string('attribute_type');
            $table->string('lable');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('primary_category_id')->references('category_id')->on('categorytree');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_attributes');
    }
}
