<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\LeadsRepository;
use App\Entities\Leads;
use App\Validators\LeadsValidator;

/**
 * Class LeadsRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class LeadsRepositoryEloquent extends BaseRepository implements LeadsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Leads::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
