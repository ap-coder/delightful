<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPagePageSectionPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_page_page_section', function (Blueprint $table) {
            $table->unsignedInteger('content_page_id');
            $table->foreign('content_page_id', 'content_page_id_fk_1066732')->references('id')->on('content_pages')->onDelete('cascade');
            $table->unsignedInteger('page_section_id');
            $table->foreign('page_section_id', 'page_section_id_fk_1066732')->references('id')->on('page_sections')->onDelete('cascade');
        });
    }
}
