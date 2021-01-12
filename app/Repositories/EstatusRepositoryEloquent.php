<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EstatusRepository;
use App\Entities\Estatus;
use App\Validators\EstatusValidator;

/**
 * Class EstatusRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EstatusRepositoryEloquent extends BaseRepository implements EstatusRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Estatus::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
