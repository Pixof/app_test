@extends('layout.master')

@section('content')

    <div class="container ">
        <form method="POST" action="{{ url('products/edit/'.$product->id) }}">
            @csrf

            <div class="form-group">
                <label class="col-form-label "> Id : </label>
                <input type="text" class="form-control" name="id" placeholder="Veuillez saisir la catégorie"
                       value="{{$product->id}}"><br>
            </div>

            <div class="form-group">
                <label class="col-form-label "> Catégorie : </label>
                <input type="text" class="form-control" name="category_id" placeholder="Veuillez saisir la catégorie"
                       value="{{$product->category_id}}"><br>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Références : </label>
                <input type="text" class="form-control" name="reference" placeholder="Veuillez saisir la référence"
                       value="{{$product->reference}}"><br>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Libellé : </label>
                <input type="text" class="form-control" name="libelle" placeholder="Veuillez saisir le libellé "
                       value="{{$product->libelle}}"><br>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description :</label>
                <textarea class="form-control" rows="2" name="description"
                          placeholder="Veuillez saisir une description">{{$product->description}}</textarea>
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Prix : </label>
                <input type="text" class="form-control" name="price" placeholder="Veuillez saisir le prix "
                       value="{{$product->price}}"><br>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Stock : </label>
                <input type="text" class="form-control" name="stock" placeholder="Veuillez saisir le prix "
                       value="{{$product->stock}}"><br>
            </div>


            <div class="form-group">
                <label for="nombre">date d'enregistrement : </label>
                <input type="text" class="form-control" name="update_at" placeholder="Veuillez saisir le stock "
                       value="{{$product->updated_at}}"><br>
            </div>

            <div class="form-group">
                <label for="nombre">date de création : </label>
                <input type="text" class="form-control" name="created_at" placeholder="Veuillez saisir le stock "
                       value="{{$product->created_at}}"><br>
            </div>

            <div class="form-check text-center">
                <a class="btn btn-dark" role="button" href="{{ url('products') }}"> Retour </a>
                <input type="submit" class="btn btn-success" value="modifier">
            </div>
            <br>
        </form>

        <form method="POST" action="{{ url('products/delete/'.$product->id) }}">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>



    </div>
@endsection
