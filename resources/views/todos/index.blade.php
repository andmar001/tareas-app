@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form action="{{ route('todos') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
              <label for="title" class="form-label">Título de la tarea</label>
              <input name="title" type="text" class="form-control" placeholder="Ingresa la tarea">
            </div>
            <button type="submit" class="btn btn-primary">Crear una nueva tarea</button>
          </form>
    </div>
@endsection