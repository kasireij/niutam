<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directories', function (Blueprint $table) {
            $table->id();
            $table->string('contact');
            $table->string('position')->nullable();
            $table->string('email_id')->unique();
            $table->string('img')->nullable();
            $table->string('department')->nullable();
            $table->string('division')->nullable();
            $table->integer('extension')->nullable();
            $table->foreign('email_id')->references('email')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directories');
    }
}
