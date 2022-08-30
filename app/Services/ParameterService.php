<?php

namespace App\Services;

use App\Repositories\ParameterRepository;

class ParameterService
{
    private $parameter;

    public function __construct(ParameterRepository $parameterRepository)
    {
        $this->parameter = $parameterRepository;
    }

    public function getList()
    {
        return $this->parameter->getList();
    }

    public function getOne($id)
    {
        $data=$this->parameter->getOne($id);
        return $data;
    }

    public function addParameter($request)
    {
        return $this->parameter->addParameter($request);
    }

    public function update($request)
    {
        return $this->parameter->update($request);
    }

    public function deleteParameter($id)
    {
        $id= $this->parameter->deleteParameter($id);

        return $id;
    }
}