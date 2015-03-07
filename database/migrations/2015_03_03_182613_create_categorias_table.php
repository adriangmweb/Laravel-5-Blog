<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorias', function(Blueprint $campo){
			
			// Motor de Mysql para relaciones entre tablas
			$campo->engine='InnoBD';
			
			$campo->increments('id');
			$campo->string('nombre',40)->unique();
			$campo->timestamps();

			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categorias');
	}

}
