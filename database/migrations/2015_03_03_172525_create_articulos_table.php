<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('titulo')->unique();
			$table->string('url')->unique();
			$table->text('tags');
			$table->string('img', 30);
			
			//FK usuario
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				//Triggers
				->onDelete('set null')
				->onUpdate('cascade');
				
			//FK categoria
			$table->integer('categoria_id')->unsigned()->nullable();
			$table->foreign('categoria_id')
				->references('id')
				->on('categorias')
				->onDelete('set null')
				->onUpdate('cascade');
			
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
		Schema::drop('articulos');
	}

}
