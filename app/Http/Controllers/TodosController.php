<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'title' => 'required'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;  // asign the title to the todo
        $todo->save();

        return redirect()->route('todos')->with('success', 'Todo created successfully.');

    }
}

// index para mostrar todos los elementos
//store para guardar un todo
//update para actualizar un todo
//destroy para eliminar un todo
// edit para mostrar el formulario de edición