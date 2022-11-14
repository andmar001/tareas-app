@extends('app')

@section('content')
    <div class="container w-25 border p-4 my-4">
        <div class="row mx-auto">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                {{-- Si la creación fue exitosa --}}
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                {{-- Si ocurrio algun error --}}
                @error('name')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror                
                <div class="form-group mb-3">
                  <label for="name" 
                         class="form-label">Nombre de la Categoria</label>
                  <input id="name" 
                         name="name" 
                         type="text" 
                         class="form-control" 
                         placeholder="Ingresa la categoria">
                </div>
                <div class="form-group mb-3">
                    <label for="color" class="form-label">Color de la Categoria</label>
                    <input id="color" 
                           name="color" 
                           type="color" 
                           class="form-control" 
                           >
                  </div>
                <button type="submit" class="btn btn-primary">Crear una nueva categoria</button>
              </form>

              <div >
                @foreach ($categories as $category)
                    <div class="row py-1">
                        <div class="col-md-9 d-flex align-items-center">
                            <a class="d-flex align-items-center gap-2" href="{{ route('categories.show', ['category' => $category->id]) }}">
                                <span class="color-container" style="background-color: {{ $category->color }}"></span> {{ $category->name }}
                            </a>
                        </div>
        
                        <div class="col-md-3 d-flex justify-content-end">
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{$category->id}}">Eliminar</button>
                            
                        </div>
                    </div>
        
                    <!-- MODAL -->
                    <div class="modal fade" id="modal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar categoría</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Al eliminar la categoría <strong>{{ $category->name }}</strong> se eliminan todas las tareas asignadas a la misma. 
                                ¿Está seguro que desea eliminar la categoría <strong>{{ $category->name }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, cancelar</button>
                                <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Sí, eliminar categoía</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection