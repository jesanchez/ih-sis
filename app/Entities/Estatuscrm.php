<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Estatuscrm.
 *
 * @package namespace App\Entities;
 */
class Estatuscrm extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'estatuscrm';
    protected $fillable = ['descripcion','status_id'];
}
