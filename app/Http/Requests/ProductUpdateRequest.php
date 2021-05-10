<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'exists:category,id',
            //je vérifie que le champs soit existant dans la table category colonne id
            // s'applique au champs KEY ou particulier.
            'reference' => 'string',
            'libelle' => 'string',
            'description' => 'string',
            'price' => 'integer',
            'stock' => 'integer',
        ];
    }
}
