<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('video_id');
            $table->integer('category_id');
            $table->integer('thumbnail_id');
            $table->integer('subtitle_id');
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
        Schema::dropIfExists('videos_detail');
    }
}
