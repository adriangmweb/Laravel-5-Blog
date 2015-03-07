<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentarios', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('contenido', 200);
			
			// Relaciones con usuario
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade');
			
			// Relaciones con articulo
			$table->integer('articulo_id')->unsigned()->nullable();
			$table->foreign('articulo_id')
				->references('id')
				->on('articulos')
				->onDelete('cascade')
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
		Schema::drop('comentarios');
	}

}
