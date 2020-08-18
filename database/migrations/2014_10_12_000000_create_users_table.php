<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');;
            $table->string('name')->comment('名前');;
            $table->string('avatar')->nullable()->comment('アバター画像');
            $table->string('twitter_id')->nullable()->comment('Twitter ID');
            $table->string('instagram_id')->nullable()->comment('Instagram ID');
            $table->string('google_id')->nullable()->comment('Google ID');
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
        Schema::dropIfExists('users');
    }
}
