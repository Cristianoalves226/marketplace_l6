@extends('layouts.app')

@section('content')

<h1>Atualiza Produto</h1>
<form class="" action="{{route('admin.products.create')}}"" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
    <div class="form-group">
        <label for="name">
            Nome Produto 
        </label>
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label for="description">
           Descrição
        </label>
        <input type="text" name="description" class="form-control" value="{{$product->description}}">
    </div>
    <div class="form-group">
        <label for="conteudo">
           Conteudo
        </label>
        <textarea name="" id="" cols="30" rows="10" class="form-control" value="{{$product->body}}"></textarea>
    </div>
  
    <div class="form-group">
        <label for="price">
            Preço
        </label>
        <input type="text" name="phone_mobile" class="form-control" value="{{$product->price}}">
    </div>
    <div class="form-group">
        <label for="slug">
            Slug
        </label>
        <input type="text" name="slug" class="form-control" value="{{$product->slug}}"
    </div>
    

    <div>
        <button class="btn btn-lg btn-success" type="submit">
            Atualizar Produto
        </button>
    </div>
</form>
@endsection