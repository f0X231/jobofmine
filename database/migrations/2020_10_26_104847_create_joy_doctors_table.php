<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoyDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joy_doctors', function (Blueprint $table) {
            $table->increments(id);
            $table->integer('in_order', 3);
            $table->string('name', 250);
            $table->string('surname', 250);
            $table->string('thumbnail', 350);
            $table->string('picture', 350);
            $table->longText('department')->nullable();
            $table->longText('position')->nullable();
            $table->longText('education')->nullable();
            $table->longText('work')->nullable();
            $table->longText('research')->nullable();
            $table->longText('social')->nullable();
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
        Schema::dropIfExists('joy_doctors');
    }
}
