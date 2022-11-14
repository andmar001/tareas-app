@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form action="{{ route('todos-update', ['id'=> $todo->id]) }}" method="POST">
            @method('PATCH')
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
              <input id="title" name="title" type="text" class="form-control" value="{{ $todo->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar tarea</button>
          </form>
    </div>
@endsection