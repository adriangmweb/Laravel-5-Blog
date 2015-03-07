<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticulosControlador extends Controller {
    
    public function __construct() {
        //Sin registro, puedes listar y ver articulos
        //$this->middleware('auth', ['except' => ['index', 'show'] ]);
    }
    
    public function index() {
        //return "Listado de articulos";
    }
    public function create() {
        return "Nuevo Artículo";
    }
    public function store() {}
    public function show($url) {}
    public function edit($url) {}
    public function update($url) {}
    public function destroy($url) {}
}