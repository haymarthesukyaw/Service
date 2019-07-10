<?php

namespace App\Repository;

interface postRepoInterface{
    public function getData();
    public function storeData(array $data);
    public function updateData(array $data,$id);
}