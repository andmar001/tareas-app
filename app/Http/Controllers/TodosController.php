<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'title' => 'required|min:3'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;  // asign the title to the todo
        $todo->save();

        return redirect()->route('todos')->with('success', 'Todo created successfully.');

    }

    //obtener elementos
    public function index(){
        $todos = Todo::all();   // query get all todos
        return view('todos.index',['todos' => $todos ]);
    }

    public function show( $id ){
        $todo = Todo::find($id);   // query get all todos
        return view('todos.show',['todo' => $todo ]);
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);   // query get all todos
        $todo->title = $request->title;  // asign the title to the todo
        $todo->save();

        return redirect()->route('todos')->with('success', 'Tarea Actualizada.');

    }

    public function destroy($id){
        $todo = Todo::find($id);   // query get all todos
        $todo->delete();
        return redirect()->route('todos')->with('success', 'Tarea Eliminada.');
    }
}

// index para mostrar todos los elementos
//store para guardar un todo
//update para actualizar un todo
//destroy para eliminar un todo
// edit para mostrar el formulario de edición
