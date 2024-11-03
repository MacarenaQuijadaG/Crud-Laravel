@extends('theme.base')

@section('content')

<div class="conteiner py-5 text-center">
    <h1>Hola mundo</h1>
    <a href="{{ route('client.index') }}" class="btn btn-primary">Clientes</a>
</div>
@endsection