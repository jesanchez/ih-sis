<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Contactos.
 *
 * @package namespace App\Entities;
 */
class Contactos extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "contactos"; 
    protected $fillable = ['lead_id','mensaje','medio'];

}
