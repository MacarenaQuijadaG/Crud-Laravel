@extends('theme.base')

@section('content')

<div class="conteiner py-5 text-center">
    <h1>Listado de Clientes</h1>
    <a href="{{ route('client.create') }}" class="btn btn-primary">Crear Cliente</a>

    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Saldo</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <tr>
                <td>FelinoHost</td>
                <td>0.0</td>
                <td>Editar - Eiminar</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection