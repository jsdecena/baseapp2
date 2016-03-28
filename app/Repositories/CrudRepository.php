<?php 

namespace App\Repositories;

interface CrudRepository
{
    public function all($columns = array('*'));

    public function paginate($perPage, $columns = array('*'));

    public function create($data = array());

    public function update($data = array(), $id);

    public function delete($id);    

    public function find($id, $columns = array('*'));    
}