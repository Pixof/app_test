<?php

namespace App\Repositories;

use App\Models\Product;


class ProductRepository implements ProductRepositoryInterface
{
    //défintion du modele utilisé
    // protected static string $model = Product::class;
    // utilisation de la librairie

    //retourne tous les objets
    public function getAll()
    {
        return Product::all();
    }
    public function getAllOrderedByDate()
    {
        return Product::orderByDesc('created_at')->get();
    }
    public function getById($id)
    {
        return Product::findOrFail($id);
    }
    public function createProduct($validate)
    {
        return Product::create($validate);
    }
    public function updateProduct($product, $update)
    {
        return $product->update($update);
    }
    public function delete($id)
    {
        return Product::find($id)->delete();
    }
}
