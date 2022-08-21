<?php

namespace App\Http\Controllers;

use App\Services\BeanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function save(Request $request)
    {
        $this->bean->addBean($request);
        return redirect('/bean');
    }

    public function add()
    {
        return view("addBean");
    }

    public function edit($id)
    {
        $data=$this->bean->getOne($id);
        return view('editBean', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'nullable|max:11',
            'roast'=>'nullable|max:11',
            'regin'=>'nullable|max:11',
            'flavor'=>'nullable|max:11',
        ]);
        if ($validator->fails()) {
            return response()->json(['id'=>'do not exist'],400);
        }

        $this->bean->update($request);
        return redirect('/bean');
    }

    public function delete($id)
    {
        $this->bean->deleteBean($id);
        return redirect('/bean');
    }
}