<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $primaryKey='idmarca';

   	protected $table='marcas';

    protected $fillable = ['idmarca', 'marca', 'pais'];

    protected $hidden = ['created_at','updated_at'];


    
    public function productos(){
    	return $this->hasMany('App\Producto');
    }
}
