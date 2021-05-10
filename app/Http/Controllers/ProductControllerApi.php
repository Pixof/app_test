<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;


class ProductControllerApi extends Controller
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->repository->getAllOrderedByDate();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductStoreRequest $request
     */
    public function store(ProductStoreRequest $request)
    {
        $validate =  $request->validated();
        $data = $this->repository->createProduct($validate);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->repository->getById($id);
        return new ProductResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductUpdateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProductUpdateRequest $request, Product $product):\Illuminate\Http\JsonResponse
    {
        $update =  $request->validated();
        $data = $this->repository->updateProduct($product, $update);
        return $data = response()->json([
            'success' => 'Produit mis à jour avec succes'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     */
    public function destroy($id)
    {
        //$request = Product::all();
        //$request = $product->delete();

        $data = $this->repository->delete($id);
        return $data = response()->json([
            'success' => 'Produit supprimé avec succes'], 200);
    }
}
