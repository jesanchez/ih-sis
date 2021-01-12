<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Leads.
 *
 * @package namespace App\Entities;
 */
class Leads extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "leads"; 
    protected $fillable = ['nombre','apellido_paterno','apellido_materno','curp','calle_numero','ciudad','estado','pais','codigo_postal','telefono','celular','correo','nivel_id','programa_id'];

}
