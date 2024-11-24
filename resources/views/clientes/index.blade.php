@extends('layouts.app')

@section('content')

<h1>LISTA DE USUARIOS</h1>
<div class="text-end">
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear</a>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">USUARIO</th>
        <th scope="col">CORREO</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->correo }}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type=submit class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $clientes->links('pagination::bootstrap-4') }}

@endsection
