<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::orderByDesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryStoreRequest $request
     */
    public function store(CategoryStoreRequest $request)
    {
        $validate =  $request->validated();
        Category::create($validate);
        return response()->json([
            'success' => 'nouveau produit créé avec succes'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryUpdateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, Category $category): \Illuminate\Http\JsonResponse
    {
        $update =  $request->validated();
        $category->update($update);
        return response()->json([
            'success' => 'Produit mis à jour avec succes'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Category $category
     */
    public function destroy(Request $request, Category $category)
    {
        $request = Category::all();
        $request = $category->delete();
        return response()->json([
            'success' => 'Produit supprimé avec succes'], 200);
    }
}
