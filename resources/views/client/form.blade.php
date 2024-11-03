@extends('theme.base')

@section('content')

<div class="conteiner py-5 text-center">
    <h1>Crear Cliente</h1>
    
    <form action="{{ route('client.store') }}" method="post">
        @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre del Clinete">
                <p class="form-text">Escriba el nombre del cliente</p>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Saldo</label>
                <input type="text" name="name" class="form-control" placeholder="Saldo del Clinete">
                <p class="form-text">Escriba el saldo del cliente</p>
            </div>

            <div class="mb-5">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea name="comments" id="" col="50" rows="4"></textarea>
                <p class="form-text">Escriba algunos Comentarios</p>
            </div>

            <button type="submit">Guardar Cliente</button>
    </form>

    
</div>
@endsection