@extends('layout.master')

@section('content')

    <div class="container ">
        <form method="POST" action="{{ url('products/create') }}">
            @csrf

            <div class="form-group">
                <label class="col-form-label "> Catégorie : </label>
                <input type="text" class="form-control" name="category_id" placeholder="Veuillez saisir la catégorie"
                       value="">
            </div><br>

            <div class="form-group">
                <label for="exampleFormControlInput1">Références : </label>
                <input type="text" class="form-control" name="reference" placeholder="Veuillez saisir la référence"
                       value="">
            </div><br>


            <div class="form-group">
                <label for="exampleFormControlInput1">Libellé : </label>
                <input type="text" class="form-control" name="libelle" placeholder="Veuillez saisir le libellé "
                       value=""><br>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description :</label>
                <textarea class="form-control" rows="2" name="description"
                          placeholder="Veuillez saisir une description"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Prix : </label>
                <input type="text" class="form-control" name="price" placeholder="Veuillez saisir le prix "
                       value=""><br>
            </div>

            <div class="form-group">
                <label for="nombre">Stock : </label>
                <input type="number" class="form-control" name="stock" placeholder="Veuillez saisir le stock " value=""><br>
            </div>

            <div class="form-check text-center">
                <a class="btn btn-dark" role="button" href="{{ url('products') }}"> Retour </a>
                <input class="btn btn-warning" type="submit" value="Ajouter">
            </div>

            <br>
        </form>
    </div>
@endsection
