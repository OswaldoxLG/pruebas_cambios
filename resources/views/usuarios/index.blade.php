@extends('layouts.app')

@section('content')

<h1>LISTA DE USUARIOS</h1>
<div class="text-end">
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear</a>
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
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->correo }}</td>
            <td>
                <a href="{{ route('usuarios.edit', $usuario->id)}}" class="btn btn-primary"> Editar </a>
            </td>
            <td>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type=submit class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $usuarios->links('pagination::bootstrap-4') }}

@endsection
