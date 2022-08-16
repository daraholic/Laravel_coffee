<?php

namespace App\Http\Controllers;
use App\Services\ParameterService;

class ParameterController extends Controller
{
    public $parameterService;
    public function __construct(ParameterService $parameterService)
    {
        $this->parameter = $parameterService;
    }

    public function getParameterList()
    {
        $data=$this->parameter->getList();
        return view('parameter', ['results' => $data]);

    }
}