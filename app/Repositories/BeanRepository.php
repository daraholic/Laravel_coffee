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

    public function getList($key)
    {
        return $this->bean->where(function ($query) use($key) {
            $query->where('name', 'like', '%' . $key . '%')
               ->orWhere('roast', 'like', '%' . $key . '%')
               ->orWhere('regin', 'like', '%' . $key . '%')
               ->orWhere('flavor', 'like', '%' . $key . '%');
          })->orderBy("created_at", "DESC")
    ->get();
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