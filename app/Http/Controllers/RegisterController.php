<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);

        // Modificar el request

        $request->request->add(['username' => Str::slug($request->username)]);

        // Validacion
        $this->validate($request, [
            'name' => ['required', 'max:30'],
            'description' => ['required', 'min:50'],
            'price' => ['required'],
            'stored' => ['required', 'min:1']
        ]);

        User::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stored' => $request->stored
        ]);

        // Auntenticar Usuario

        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);

        // Otra Forma de Aautenticar

        auth()->attempt($request->only('email', 'password'));

        // Redireccionar
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
