<?php

namespace App\Repositories;

use App\Models\Parameter;

class ParameterRepository
{
    private $parameter;
    public function __construct(Parameter $parameter)
    {
        $this->parameter = $parameter;
    }

    public function getList()
    {
        return $this->parameter->all();
    }
    
    public function getOne($id)
    {
        return $this->parameter->findOrfail($id);
    }

    public function addParameter($request)
    { 
        $gram=$request->gram;
        $water=$request->water;
        $brewRatio=$request->brewRatio;
        $time=$request->time;
        return $this->parameter->create(['gram'=>$gram,'water'=>$water,'brewRatio'=>$brewRatio,'time'=>$time,]);
    }

    public function update($request)
    {
        $id=$request->id;
        $parameter = $this->parameter->findOrFail($id);
        $gram=$request->gram;
        $water=$request->water;
        $brewRatio=$request->brewRatio;
        $time=$request->time;
        return $parameter->update(['gram'=>$gram,'water'=>$water,'brewRatio'=>$brewRatio,'time'=>$time,]);
    }

    public function deleteParameter($id)
    {
        $parameter = $this->parameter->findOrFail($id);
        return $parameter->delete();
    }

}