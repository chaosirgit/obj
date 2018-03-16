<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('openid')->comment('微信openid');
            $table->string('mobile');
            $table->string('nickname');
            $table->tinyInteger('gender',false,true)->default(0)->comment('0女 1男');
            $table->string('avatar');
            $table->tinyInteger('type')->comment('1');
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
        Schema::dropIfExists('user');
    }
}
