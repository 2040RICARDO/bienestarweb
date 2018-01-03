<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table='publicacion';
    protected $primarykey='id';
    protected $fillable =[
        'id', 'nombre', 'estado', 'fechapublicacion','descripcion','ruta'
    ];

    public function user(){
        return $this->belongsTo('App\User','users_id','id');
    }
    
    
}
