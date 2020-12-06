<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->integer('order_no');
            $table->string('title', 250)->charset('utf8')->nullable();
            $table->string('page', 50)->charset('utf8');
            $table->integer('page_id');
            $table->enum('typefile', ['IMG', 'VDO'])->charset('utf8')->default('IMG');
            $table->string('sourcefile', 350)->charset('utf8');
            $table->string('link', 350)->charset('utf8')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->enum('is_active', ['Y', 'N'])->charset('utf8')->default('Y');
            $table->enum('is_delete', ['Y', 'N'])->charset('utf8')->default('N');
            $table->timestamp('create_date')->nullable();
            $table->string('create_by', 25)->charset('utf8')->nullable();
            $table->timestamp('update_date')->nullable();
            $table->string('update_by', 25)->charset('utf8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner');
    }
}
