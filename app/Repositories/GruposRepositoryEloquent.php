<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\GruposRepository;
use App\Entities\Grupos;
use App\Validators\GruposValidator;

/**
 * Class GruposRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class GruposRepositoryEloquent extends BaseRepository implements GruposRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Grupos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
