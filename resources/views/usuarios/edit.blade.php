@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul> 
        </div>
    @endif

    <h1>Actualizar</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="Nombre" name="nombre" value="{{ $usuario->nombre }}">
            </div>
          </div>
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staticEmail" name="correo" value="{{ $usuario->correo }}">
            </div>
          </div>
          <div class="mb-3 row">
            <button type="submit" class="btn btn-primary" id="envio_user">Enviar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
          </div>
    </form>
@endsection