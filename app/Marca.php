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

    //accessors
    public function getFullNameAttribute(){
        return "{$this->marca} {$this->pais}";
    }

    //accessors que me obtiene todas las preguntas 
    public function getListaProductoAttribute(){
        return $this->producto;  
    }

    //mutator colocar en mayuscula los nombres de la clase
    public function setMarcaAttribute($value){
        $this->attributes['marca'] = strtolower($value);
    }

    protected  $appends=[
        'lista_producto',
    ];
}



