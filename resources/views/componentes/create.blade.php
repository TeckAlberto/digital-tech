@extends('layouts.app')


@section('titulo')
    Crear componente
@endsection

@section('contenido')
    <div class="grid grid-cols-6 p-6">
        <form class="col-span-4 col-start-2 p-4 bg-white rounded-lg shadow-lg" novalidate method="POST" action="{{route('componentes.create')}}">
            @csrf

            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-bold text-gray-600 uppercase">Nombre del Componente</label>
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

                @error('name')
                    <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="description" class="mb-2 text-sm font-bold text-gray-600 uppercase">Descripcion del Componente</label>
                <textarea 
                    id="description" 
                    name="description" 
                    placeholder="Descripcion" 
                    type="text" 
                    class="w-full p-3 border rounded-lg 
                    @error('description')
                            border-red-500
                    @enderror"
                    value = "{{old('description')}}"
                ></textarea>

                @error('description')
                    <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                @enderror
            </div>

            <div class="mb-2">
                <label for="description" class="mb-2 text-sm font-bold text-gray-600 uppercase">Categoria General del Componente</label>
                <select class="py-2 pl-3 text-gray-700 border rounded-md" name="" id="">
                    <option value="">-- Seleccione una opcion --</option>
                    <option class="text-gray-700 bg-white hover:bg-gray-200" value="">-- 1 --</option>
                </select>
            </div>
                    

            <div class="mb-5">
                <label for="price" class="mb-2 text-sm font-bold text-gray-600 uppercase">Precio del Componente</label>
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

                @error('price')
                    <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                @enderror
            </div>
            

            <div class="mb-5">
                <label for="stored" class="mb-2 text-sm font-bold text-gray-600 uppercase">Cantidad del Componente</label>
                <input 
                    id="stored" 
                    name="stored" 
                    placeholder="Cantidad" 
                    type="number" 
                    class="w-full p-3 border rounded-lg 
                    @error('stored')
                            border-red-500
                    @enderror"
                    value = "{{old('price')}}"
                >

                @error('stored')
                    <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{$message}}</p>
                @enderror
            </div>

    
            <input type="submit" value="Crear Componente" class="gap-1 p-3 mt-4 text-sm font-bold text-white bg-indigo-600 rounded-lg">
        </form>

    </div>
@endsection