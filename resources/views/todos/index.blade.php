@extends('app');

@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form>
            <div class="form-group">
              <label for="title" class="form-label">Título de la tarea</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Crear una nueva tarea</button>
          </form>
    </div>
@endsection