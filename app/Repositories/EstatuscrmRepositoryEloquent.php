<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EstatuscrmRepository;
use App\Entities\Estatuscrm;
use App\Validators\EstatuscrmValidator;

/**
 * Class EstatuscrmRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class EstatuscrmRepositoryEloquent extends BaseRepository implements EstatuscrmRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Estatuscrm::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
