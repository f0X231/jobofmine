<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->integer('order_no');
            $table->string('name', 350)->charset('utf8')->nullable();
            $table->string('nickname', 80)->charset('utf8')->nullable();
            $table->integer('license');
            $table->string('position', 350)->charset('utf8')->nullable();
            $table->string('department', 350)->charset('utf8')->nullable();
            $table->text('education')->charset('utf8')->nullable();
            $table->text('work')->charset('utf8')->nullable();
            $table->text('extended')->charset('utf8')->nullable();
            $table->string('thumbnail', 350)->charset('utf8')->nullable();
            $table->string('picture', 350)->charset('utf8')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
