<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey='idproducto';

   	protected $table='productos';

    protected $fillable = ['idproducto', 'producto', 'tipo', 'caducidad', 'marca_id'];

    protected $hidden = ['created_at','updated_at'];

    public function marca(){
    	return $this->belongsTo('App\Marca', 'marca_id');
    } 

}
