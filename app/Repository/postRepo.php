<?php
namespace App\Repository;
use App\Task;

class postRepo implements postRepoInterface{
    protected $task;
    public function __construct(Task $task){
        $this->task=$task;
    }
    public function getData(){
        return $this->task->all();
    }
    public function storeData(array $data){
        return $this->task->create($data);
    }
    public function updateData(array $data,$id){
        $task=$this->task->findOrFail($id);
       return $task->update($data);
    }
}