<?php

namespace App\Repositories;


interface ProductRepositoryInterface
{
    public function getAll();
    public function getAllOrderedByDate();
    public function getById($id);
    public function createProduct($validate);
    public function updateProduct($product, $update);
    public function delete($id);

}

