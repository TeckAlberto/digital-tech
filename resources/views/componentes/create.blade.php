@extends('layouts.app')


@section('titulo')
    Crear componente
@endsection

@section('contenido')
    <div class="grid grid-cols-6">
        <form class="col-span-4 col-start-2" novalidate method="POST" action="{{route('componentes.create')}}">
            @csrf

            <div class="mb-5">
                <label for="name" class="block text-sm font-bold uppercase">Nombre del Componente</label>
                <input 
                    id="name" 
                    name="name" 
                    placeholder="Nombre" 
                    type="text"
                    class="w-full p-3 border rounded-lg 
                    @error('name')
                            border-red-500
                    @enderror"
                    value = "{{old('name')}}"
                >
            </div>

            <div class="mb-5">
                <label for="description" class="text-sm font-bold uppercase">Descripcion del Componente</label>
                <input 
                    id="description" 
                    name="description" 
                    placeholder="Descripcion" 
                    type="text" 
                    class="w-full p-3 border rounded-lg 
                    @error('description')
                            border-red-500
                    @enderror"
                    value = "{{old('description')}}"
                >
            </div>
                    

            <div class="mb-5">
                <label for="price" class="text-sm font-bold uppercase">Precio del Componente</label>
                <input 
                    id="price" 
                    name="price" 
                    placeholder="Precio" 
                    type="number" 
                    class="w-full p-3 border rounded-lg 
                    @error('price')
                            border-red-500
                    @enderror"
                    value = "{{old('price')}}"
                >
            </div>
            

            <div class="mb-5">
                <label for="stored" class="text-sm font-bold uppercase">Cantidad del Componente</label>
                <input 
                    id="stored" 
                    name="stored" 
                    placeholder="Cantidad" 
                    type="number" 
                    class="w-full p-3 border rounded-lg 
                    @error('price')
                            border-red-500
                    @enderror"
                    value = "{{old('price')}}"
                >
            </div>

    
            <input type="submit" value="Crear Componente" class="gap-1 p-3 mt-4 text-sm text-white bg-indigo-600 rounded-lg">
        </form>

    </div>
@endsection