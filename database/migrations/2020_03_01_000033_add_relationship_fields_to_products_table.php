<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('product_size_id')->nullable();
            $table->foreign('product_size_id', 'product_size_fk_1066724')->references('id')->on('sizes');
            $table->unsignedInteger('product_color_id')->nullable();
            $table->foreign('product_color_id', 'product_color_fk_1066725')->references('id')->on('colors');
        });
    }
}
