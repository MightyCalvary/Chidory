<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keyword')->nullable();
            $table->string('type');
            $table->string('category');
            $table->string('caption');
            $table->text('gallery');
            $table->text('description');
            $table->datetime('published_at');
            $table->datetime('unpublished_at')->nullable();
            $table->timestamps();

            $table->index(['published_at', 'type', 'category']);
            $table->index(['published_at', 'type', 'keyword']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_content');
    }
}
