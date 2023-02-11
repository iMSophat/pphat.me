<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThubnailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thubnail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->boolean('status')->default(true);
            $table->boolean('is_deleted')->default(false);
            $table->date('created_at')->default(now());
            $table->integer('created_by')->nullable();
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thubnail');
    }
}
