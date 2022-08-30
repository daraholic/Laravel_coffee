<?php

namespace App\Http\Controllers;
use App\Services\ParameterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

    public function getParameter(Request $request)
    {
        $id=$request->id;
        $data=$this->parameter->getOne($id);
        return view('parameter', ['data' => $data]);
    }

    public function save(Request $request)
    {
        $this->parameter->addParameter($request);
        return redirect('/parameter');
    }

    public function add()
    {
        return view("addParameter");
    }

    public function edit($id)
    {
        $data=$this->parameter->getOne($id);
        return view('editParameter', ['data' => $data]);
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

        $this->parameter->update($request);
        return redirect('/parameter');
    }

    public function delete($id)
    {
        $this->parameter->deleteParameter($id);
        return redirect('/Parameter');
    }
}