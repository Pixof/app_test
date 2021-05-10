<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'category_id',
        'reference',
        'libelle',
        'description',
        'price',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     // dans la méthode index ud controller product j'ai besoin d'afficher un champs supplémentaire 'name' de la table category
    // Je dois récupérer l'information dans mon model product pour afficher un champs supplémentaire comme le name de la category
}
