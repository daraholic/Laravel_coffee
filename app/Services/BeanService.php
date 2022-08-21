<?php

namespace App\Services;

use App\Repositories\BeanRepository;

class BeanService
{
    private $bean;

    public function __construct(BeanRepository $beanRepository)
    {
        $this->bean = $beanRepository;
    }

    public function getList()
    {
        return $this->bean->getList();
    }

    public function getOne($id)
    {
        $data=$this->bean->getOne($id);
        return $data;
    }

    public function addBean($request)
    {
        return $this->bean->addBean($request);
    }

    public function update($request)
    {
        return $this->bean->update($request);
    }
}
