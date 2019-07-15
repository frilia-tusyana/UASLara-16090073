<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenghasilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghasilan', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('date', 25);
            $table->string('jumlah', 25);
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
        Schema::dropIfExists('penghasilan');
    }
}
