<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('talents')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('facebook_username')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('google_id')->nullable();
            $table->string('google_username')->nullable();
            $table->string('youtube')->nullable();
            $table->string('soundcloud')->nullable();
            $table->string('tagline')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profiles');
    }

}
