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

    public function getList($key)
    {
        return $this->bean->getList($key);
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

    public function deleteBean($id)
    {
        $id= $this->bean->deleteBean($id);

        return $id;
    }
}