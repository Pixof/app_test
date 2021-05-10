@extends('layout.master')

@section('content')

    <hr>
    <section>
        <a class="btn btn-warning" role="button" href="{{(url('products/create'))}}"> Créer nouveau produit</a>
        <hr>
        <div>
            <table class="table text-center align-items-center ">
                <thead>
                <tr class="table-primary text-monospace">
                    <th scope="col">ID</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Référence</th>
                    <th scope="col">Libéllé</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                    <tr class="table">
                        <td> {{$product['id']}}</td>
                        <td> {{$product['category_id']}}</td>
                        <td> {{$product['reference']}}</td>
                        <td> {{$product['libelle']}}</td>
                        <td> {{$product['desccription']}}</td>
                        <td> {{$product['price']}}</td>
                        <td> {{$product['stock']}}</td>
                        <td><a class="btn btn-primary" role="button" href="{{ url('products/edit/'.$product->id) }}">Modifier/supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection

