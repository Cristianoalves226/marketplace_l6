<h1>Criar Loja</h1>
<form action="" method="get">
    <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
    <div>
        <label for="name">
            Nome Loja 
        </label>
        <input type="text" name="">
    </div>
    <div>
        <label for="description">
           Descrição
        </label>
        <input type="text" name="">
    </div>
    <div>
        <label for="phone">
            Telefone
        </label>
        <input type="text" name="">
    </div>
    <div>
        <label for="phone_mobile">
            Celular/Whatsapp 
        </label>
        <input type="text" name="">
    </div>
    <div>
        <label for="slug">
            Slug
        </label>
        <input type="text" name="">
    </div>
    <div>
        <label for="">
            Usuario
        </label>
        <select name="" id="">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">
            Criar Loja
        </button>
    </div>
</form>