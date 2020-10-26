<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoyAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joy_advertisements', function (Blueprint $table) {
            $table->increments(id);
            $table->integer('in_order', 3);
            $table->string('name', 150);
            $table->string('caption', 250)->nullable();
            $table->enum('datatype', ['IMAGE', 'VDO']);
            $table->enum('pages', ['HOME', 'ABOUTUS', 'SERVICES', 'DOCTOR', 'ARTICLE', 'CONTACTUS']);
            $table->string('vdesktop', 500);
            $table->string('vmobile', 500);
            $table->string('link_url', 250)->nullable();
            $table->timestamp('dateform')->nullable();
            $table->timestamp('dateto')->nullable();
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
        Schema::dropIfExists('joy_advertisements');
    }
}
