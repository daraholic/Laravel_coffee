<?php

namespace App\Services;

use App\Repositories\BeanRepository;

class BeanService
{
    private $bean;

    public function __construct(BeanRepository $beanRepository)
    {
        $this->bean = $beanRepository;
    }

    public function getList()
    {
        return $this->bean->getList();
    }

    // public function addMessage($request)
    // {
    //     $name = data_get($request,'name');
    //     $message = data_get($request,'message');
        
    //     return $this->message->addMessage($name,$message);
    // }

    // public function deleteMessage($id)
    // {
    //     $id= $this->message->deleteMessage($id);

    //     return $id;
    // }

    // public function getOne($id)
    // {
    //     return $this->message->getOne($id);
    // }

    // public function updateMessage($request,$id)
    // {
    //     $id=data_get($request,'id');
    //     $name = data_get($request,'name');
    //     $message = data_get($request,'message');
 
    //     return $this->message->updateMessage($id,$name,$message);
    // }
}
