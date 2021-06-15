@extends('layouts.app')

@section('content')
    
<a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>

    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>

        </thead>
        <tbody>
            @foreach ($products as $pro)
                <tr>
                    <td>{{ $pro->id }}</td>
                    <td>{{ $pro->name }}</td>
                    <td></td>
                    <td>
                        <a href="{{route('admin.products.edit',['product'=>$pro->id])}}" class="btn btn-sm btn-primary">EDITAR</a>
                        <a href="{{route('admin.products.destroy',['product'=>$pro->id])}}" class="btn btn-sm btn-danger">REMOVER</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links()}}
@endsection
