@extends('layouts.app')

@section('content')

<h1>Criar Loja</h1>
<form class="" action="{{route('admin.products.create')}}"" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
    <div class="form-group">
        <label for="name">
            Nome Produto 
        </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">
           Descrição
        </label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="form-group">
        <label for="conteudo">
           Conteudo
        </label>
        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
  
    <div class="form-group">
        <label for="price">
            Preço
        </label>
        <input type="text" name="phone_mobile" class="form-control">
    </div>
    <div class="form-group">
        <label for="slug">
            Slug
        </label>
        <input type="text" name="slug" class="form-control">
    </div>
    <div class="form-group">
        <label for="">
            Lojas
        </label>
        <select name="user" class="form-control">
            @foreach($stores as $store)
                <option value="{{$store->id}}">{{$store->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button class="btn btn-lg btn-success" type="submit">
            Criar Loja
        </button>
    </div>
</form>
@endsection