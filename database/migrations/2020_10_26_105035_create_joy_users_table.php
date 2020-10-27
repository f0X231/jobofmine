<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joy_users', function (Blueprint $table) {
            $table->increments(id);
            $table->string('username', 150)->charset('utf8');
            $table->string('email', 150)->charset('utf8');
            $table->string('password', 150)->charset('utf8');
            $table->string('avatar', 150)->charset('utf8');
            $table->integer('usergroupsid', 2);
            $table->enum('is_actived', ['Y', 'N'])->charset('utf8')->default('Y');
            $table->enum('is_deleted', ['Y', 'N'])->charset('utf8')->default('N');
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
        Schema::dropIfExists('joy_users');
    }
}
