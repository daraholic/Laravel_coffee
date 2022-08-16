<?php

namespace App\Http\Controllers;

use App\Services\BeanService;
class BeanController extends Controller
{
    public $beanService;
    public function __construct(BeanService $beanService)
    {
        $this->bean = $beanService;
    }

    public function getBeanList()
    {
        $data=$this->bean->getList();
        return view('home', ['results' => $data]);
    }
}