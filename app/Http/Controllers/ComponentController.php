<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{

    public function index()
    {
        return view('componentes.create');
    }

    // The request contains all the information of the form
    public function store(Request $request)
    {


        // Form data validation rules
        $this->validate($request, [
            'name' => ['required', 'max:30'],
            'description' => ['required', 'min:50'],
            'price' => ['required'],
            'stored' => ['required', 'min:1']
        ]);
        dd('Componente Nuevo');
        // Create the component
        Component::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stored' => $request->stored
        ]);

        //return redirect('/');
    }
}
