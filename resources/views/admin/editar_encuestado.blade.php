<!-- resources/views/admin/modificar_encuestado.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar Encuestado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('encuesta.update', $encuestado->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Nombres y Apellidos -->
                        <div class="mb-4">
                            <label for="nombres_apellidos" class="block text-sm font-medium text-gray-700">Nombres y Apellidos</label>
                            <input type="text" name="nombres_apellidos" id="nombres_apellidos" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->nombres_apellidos }}">
                        </div>
                        <!-- Vereda -->
                        <div class="mb-4">
                            <label for="vereda" class="block text-sm font-medium text-gray-700">Vereda</label>
                            <input type="text" name="vereda" id="vereda" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->vereda }}">
                        </div>
                        <!-- Municipio -->
                        <div class="mb-4">
                            <label for="municipio" class="block text-sm font-medium text-gray-700">Municipio</label>
                            <input type="text" name="municipio" id="municipio" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->municipio }}">
                        </div>
                        <!-- Departamento -->
                        <div class="mb-4">
                            <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                            <input type="text" name="departamento" id="departamento" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->departamento }}">
                        </div>
                        <!-- Responsable -->
                        <div class="mb-4">
                            <label for="responsable" class="block text-sm font-medium text-gray-700">Responsable</label>
                            <input type="text" name="responsable" id="responsable" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->responsable }}">
                        </div>
                        <!-- Correo Electrónico -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->email }}">
                        </div>
                        <!-- Agrega más campos según tus necesidades -->

                        <!-- Botón para guardar cambios -->
                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:shadow-outline-indigo disabled:opacity-25 transition ease-in-out duration-150">
                                Guardar cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
