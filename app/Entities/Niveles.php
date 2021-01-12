<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Niveles.
 *
 * @package namespace App\Entities;
 */
class Niveles extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'niveles'
    protected $fillable = ['descripcion','status'];

}
