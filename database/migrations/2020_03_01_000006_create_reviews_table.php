<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('review_author')->nullable();
            $table->string('review_content')->nullable();
            $table->integer('rating');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
