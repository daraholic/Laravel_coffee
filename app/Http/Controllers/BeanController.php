<?php

namespace App\Http\Controllers;

use App\Services\BeanService;
use Illuminate\Http\Request;
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
    
    public function getBean(Request $request)
    {
        $id=$request->id;
        $data=$this->bean->getOne($id);
        
        return view('home', ['data' => $data]);
    }
}