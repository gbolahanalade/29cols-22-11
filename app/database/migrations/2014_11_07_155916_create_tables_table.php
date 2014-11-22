<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('read_more');
			$table->text('content');
			$table->string('image');
			$table->unsignedInteger('comment_count');
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->timestamps();
		});

		Schema::create('songs', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->boolean('published')->default(0);
			$table->float('rating_cache')->default(3.0);
			$table->text('read_more');
			$table->text('description');			
			$table->string('genre');
			$table->unsignedInteger('rating_count')->default(0);
			$table->string('image');	
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');	
			$table->timestamps();
		});

		Schema::create('videos', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->boolean('published')->default(0);
			$table->float('rating_cache')->default(3.0);
			$table->string('read_more');
			$table->text('description');	
			$table->string('song_art');
			$table->unsignedInteger('comment_count');
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->timestamps();
		});

		Schema::create('reviews', function($table)
		{
			$table->increments('id');
			$table->unsignedInteger('rating');
			$table->text('comment');
			$table->boolean('approved')->default('1');
			$table->boolean('spam')->default('0');						
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->unsignedInteger('song_id');
			$table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade')->onUpdate('cascade');
			$table->unsignedInteger('video_id');
			$table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade')->onUpdate('cascade');
			$table->timestamps();
		});


		Schema::create('comments', function($table)
		{
			$table->increments('id');			
			$table->text('comment');
			$table->boolean('Is_approved');
			$table->unsignedInteger('blog_id');	
			$table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');	
			$table->timestamps();
		});

		Schema::create('blogtags', function($table)
        {
            $table->increments('id');
            $table->string('name', 64);
            $table->timestamps();
        });

		Schema::create('blog_blogtag', function($table)
        {
            $table->unsignedInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('blogtag_id');
            $table->foreign('blogtag_id')->references('id')->on('blogtags')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('songtags', function($table)
        {
            $table->increments('id');
            $table->string('name', 64);
            $table->timestamps();
        });

        Schema::create('song_songtag', function($table)
        {
            $table->unsignedInteger('song_id');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('songtag_id');
            $table->foreign('songtag_id')->references('id')->on('songtags')->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::create('videotags', function($table)
        {
            $table->increments('id');
            $table->string('name', 64);
            $table->timestamps();
        });

        Schema::create('video_videotag', function($table)
        {
            $table->unsignedInteger('video_id');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('videotag_id');
            $table->foreign('videotag_id')->references('id')->on('videotags')->onDelete('cascade')->onUpdate('cascade');
        });
    }

	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blogs');
		Schema::drop('songs');
		Schema::drop('videos');
		Schema::drop('reviews');
		Schema::drop('comments');
		Schema::drop('blogtags');
		Schema::drop('blog_blogtag');
		Schema::drop('songtags');
		Schema::drop('song_songtag');
		Schema::drop('videotags');
		Schema::drop('video_videotag');
	}
}
