<?php

namespace App\Repositories;

use App\Models\Bean;

class BeanRepository
{
    private $bean;
    public function __construct(Bean $bean)
    {
        $this->bean = $bean;
    }

    public function getList()
    {
        return $this->bean->all();
    }
    
    public function getOne($id)
    {
        return $this->bean->findOrfail($id);
    }
}
