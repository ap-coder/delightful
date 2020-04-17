<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedInteger('service_reviewed_id')->nullable();
            $table->foreign('service_reviewed_id', 'service_reviewed_fk_1066752')->references('id')->on('services');
            $table->unsignedInteger('product_reviewed_id')->nullable();
            $table->foreign('product_reviewed_id', 'product_reviewed_fk_1066753')->references('id')->on('products');
        });
    }
}
