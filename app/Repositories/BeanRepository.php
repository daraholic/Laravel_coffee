<?php

namespace App\Repositories;

use App\Models\Bean;

class BeanRepository
{
    private $bean;
    public function __construct(Bean $bean)
    {
        $this->bean = $bean;
    }

    public function getList()
    {
        return $this->bean->all();
        return $this->where('name', 'like', '%' . $all . '%')->get();
    }
    
    public function getOne($id)
    {
        return $this->bean->findOrfail($id);
    }

    public function addBean($request)
    { 
        $name=$request->name;
        $roast=$request->roast;
        $regin=$request->regin;
        $flavor=$request->flavor;
        return $this->bean->create(['name'=>$name,'roast'=>$roast,'regin'=>$regin,'flavor'=>$flavor,]);
    }

    public function update($request)
    {
        $id=$request->id;
        $bean = $this->bean->findOrFail($id);

        $name=$request->name;
        $roast=$request->roast;
        $regin=$request->regin;
        $flavor=$request->flavor;
        return $bean->update(['name'=>$name,'roast'=>$roast,'regin'=>$regin,'flavor'=>$flavor,]);
    }

    public function deleteBean($id)
    {
        $bean = $this->bean->findOrFail($id);
        return $bean->delete();
    }
}
