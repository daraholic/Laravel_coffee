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
    
    // public function addMessage($name,$message)
    // { 
    //     return $this->message->create(['name'=>$name,'message'=>$message,]);
    // }

    // public function deleteMessage($id)
    // {
    //     $message = $this->message->findOrFail($id);
    //     return $message->delete();
    // }

    // public function getOne($id)
    // {
    //     return $this->message->find($id);
    // }

    // public function updateMessage($id,$name,$message)
    // {
    //     $data=$this->message->findOrFail($id);
    //     $data->name=$name;
    //     $data->message=$message;
    //     $data->save();
    //     return $data;
    // }

}
