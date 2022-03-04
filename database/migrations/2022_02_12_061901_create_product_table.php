<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('pro_id');
            $table->bigInteger('pro_cate')->unsigned();
            $table->string('pro_name');
            $table->string('pro_image')->nullable();
            $table->double('pro_price');
            $table->double('pro_discount');
            $table->unsignedInteger('pro_new')->default(0)->comment='1:new 0:old';
            $table->longText('pro_description');
            $table->foreign('pro_cate')->references('category_id')->on('category');
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
        Schema::dropIfExists('product');
    }
}
