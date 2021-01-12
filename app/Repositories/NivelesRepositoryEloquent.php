<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\NivelesRepository;
use App\Entities\Niveles;
use App\Validators\NivelesValidator;

/**
 * Class NivelesRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class NivelesRepositoryEloquent extends BaseRepository implements NivelesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Niveles::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
