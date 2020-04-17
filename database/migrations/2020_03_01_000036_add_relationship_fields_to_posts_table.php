<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedInteger('author_id')->nullable();
            $table->foreign('author_id', 'author_fk_1066750')->references('id')->on('users');
        });
    }
}
