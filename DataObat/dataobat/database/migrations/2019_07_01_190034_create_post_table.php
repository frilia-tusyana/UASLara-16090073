<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nama', 25);
            $table->string('stok', 5);
            $table->string('harga', 25);
            $table->string('jo', 10);
            $table->string('bobot', 10);
            $table->enum('deleted', ['IYA', 'TIDAK'])->default('TIDAK');
            $table->rememberToken();
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
        Schema::dropIfExists('post');
    }
}
