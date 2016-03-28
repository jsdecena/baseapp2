<?php

namespace App\Repositories;

use App\Repositories\CrudRepository;
use App\Repositories\Eloquent\Repository;

class EmployeeRepository extends Repository {

    public function model()
    {
        return 'App\Models\Employee';
    }
}