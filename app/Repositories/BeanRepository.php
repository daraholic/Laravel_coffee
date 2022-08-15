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
