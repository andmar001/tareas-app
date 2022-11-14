@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form action="{{ route('todos') }}" method="POST">
            @csrf
            {{-- Si la creación fue exitosa --}}
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            {{-- Si ocurrio algun error --}}
            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror                
            <div class="form-group mb-3">
              <label for="title" class="form-label">Título de la tarea</label>
              <input id="title" name="title" type="text" class="form-control" placeholder="Ingresa la tarea">
            </div>
            <button type="submit" class="btn btn-primary">Crear una nueva tarea</button>
          </form>
    </div>
@endsection