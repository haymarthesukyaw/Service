<?php
namespace App\Service;

interface postServiceInterface{
    public function getData();
    public function storeData(array $data);
    public function updateData(array $data,Task $task);
}