<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('section');
            $table->string('section_nickname')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
