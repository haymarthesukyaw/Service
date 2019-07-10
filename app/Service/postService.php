<?php
namespace App\Service;

use App\Repository\postRepoInterface;

class postService implements postServiceInterface{
    protected $postRepo;
    public function __construct(postRepoInterface $postRepo){
        $this->postRepo=$postRepo;
    }
    public function getData(){
        return $this->postRepo->getData();
    }
    public function storeData(array $data){
        return $this->postRepo->storeData($data);
    }
    public function updateData(array $data,$id){
        return $this->postRepo->updateData($data,$id);
    }
}