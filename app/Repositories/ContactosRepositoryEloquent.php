<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ContactosRepository;
use App\Entities\Contactos;
use App\Validators\ContactosValidator;

/**
 * Class ContactosRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ContactosRepositoryEloquent extends BaseRepository implements ContactosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contactos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
