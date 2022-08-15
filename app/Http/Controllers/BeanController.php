<?php

namespace App\Http\Controllers;
use App\Models\Bean;
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
        // Bean::all();
        $data=$this->bean->getList();
        // dd($data);
        return view('home', ['results' => $data]);
    }
}