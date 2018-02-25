<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista_suspendido extends Model
{
    protected $table ='lista_suspendido';
    protected $primarykey= 'id';
    protected $fillable =[
    'id', 'nombre', 'ci', 'mes'];
}
