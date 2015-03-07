<?php namespace App\Http\Modelos;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model {
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'articulos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['titulo', 'url', 'tags', 'img', 'categoria_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
	
}