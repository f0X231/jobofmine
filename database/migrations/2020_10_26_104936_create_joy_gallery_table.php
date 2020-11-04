<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoyGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joy_gallery', function (Blueprint $table) {
            $table->increments(id);
            $table->integer('group_id', 5);
            $table->integer('in_order', 5);
            $table->string('name', 150);
            $table->string('captions', 150);
            $table->string('images_path', 250);
            $table->string('link_url', 250);
            $table->enum('is_actived', ['Y', 'N'])->default('Y');
            $table->enum('is_deleted', ['Y', 'N'])->default('N');
            $table->timestamp('create_date')->nullable();
            $table->string('create_by', 25)->nullable();
            $table->timestamp('update_date')->nullable();
            $table->string('update_by', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joy_gallery');
    }
}
