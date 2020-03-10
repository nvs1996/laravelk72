<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangMoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_moi', function (Blueprint $table) {
            $table->increments('id'); //khoá chính,khoá tự tăng,int,unsigned(không dấu)
            $table->string('name', 100);
            $table->string('password');
            $table->integer('level')->unsigned();
            $table->tinyInteger('state')->nullable()->unsigned();
            $table->string('full')->default('NGuyễn thế phúc');
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
        Schema::dropIfExists('bang_moi');
    }
}
