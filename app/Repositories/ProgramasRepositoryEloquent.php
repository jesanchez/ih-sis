<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProgramasRepository;
use App\Entities\Programas;
use App\Validators\ProgramasValidator;

/**
 * Class ProgramasRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProgramasRepositoryEloquent extends BaseRepository implements ProgramasRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Programas::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
