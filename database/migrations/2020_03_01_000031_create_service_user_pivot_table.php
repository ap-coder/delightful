<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('service_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_1066706')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('service_id');
            $table->foreign('service_id', 'service_id_fk_1066706')->references('id')->on('services')->onDelete('cascade');
        });
    }
}
