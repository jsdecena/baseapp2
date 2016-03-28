<?php

namespace App\Repositories;

use App\Repositories\CrudRepository;
use App\Repositories\Eloquent\Repository;

class CustomerRepository extends Repository {

    public function model()
    {
        return 'App\Models\Customer';
    }
}