<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->integer('order_no');
            $table->text('title')->charset('utf8');
            $table->text('description')->charset('utf8');
            $table->text('detail')->charset('utf8');
            $table->string('thumbnail', 500)->charset('utf8');
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
        Schema::dropIfExists('services');
    }
}
