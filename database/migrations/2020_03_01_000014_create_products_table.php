<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('seo_title')->nullable();
            $table->string('facebook_title')->nullable();
            $table->string('twitter_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
