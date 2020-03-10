<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangPhu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_phu', function (Blueprint $table) {
            $table->increments('id');
            $table->text('info');
            $table->integer('bang_moi_id')->unsigned();
            $table->foreign('bang_moi_id')->references('id')->on('bang_moi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bang_phu');
    }
}
