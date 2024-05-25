<!-- resources/views/admin/caracterizacion_dos.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CARACTERIZACIÓN 2') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Nombres y Apellidos -->
                        <div class="mb-4">
                            <label for="nombres_apellidos" class="block text-sm font-medium text-gray-700">Nombres y Apellidos</label>
                            <input type="text" name="nombres_apellidos" id="nombres_apellidos" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->nombres_apellidos }}" readonly>
                        </div>
                        <!-- Correo Electrónico -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $encuestado->email }}" readonly>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('guardar.caracterizacion2') }}">
                        @csrf

                        <!-- Pregunta 9 -->
                        <div>
                            <label class="block font-medium text-sm text-gray-700">9. ¿CÓMO SE LLAMA LA UNIDAD PRODUCTIVA TRADICIONAL?</label>
                            <div>
                                <input type="checkbox" name="unidad_productiva[]" value="Finca tradicional (zona de ladera)"> Finca tradicional (zona de ladera) <br>
                                <input type="checkbox" name="unidad_productiva[]" value="Finca tradicional (zona plana)"> Finca tradicional (zona plana) <br>
                                <input type="checkbox" name="unidad_productiva[]" value="Finca agrícola"> Finca agrícola <br>
                                <input type="checkbox" name="unidad_productiva[]" value="Parcela o lote"> Parcela o lote <br>
                            </div>
                        </div>

                        <!-- Pregunta 10 -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">10. EPOCA DE SIEMBRA</label>
                            <div>
                                <input type="checkbox" name="epoca_siembra[]" value="Empezando el primer semestre"> Empezando el primer semestre <br>
                                <input type="checkbox" name="epoca_siembra[]" value="Empezando el segundo semestre"> Empezando el segundo semestre <br>
                                <input type="checkbox" name="epoca_siembra[]" value="Con las fases de la luna"> Con las fases de la luna <br>
                                <input type="checkbox" name="epoca_siembra[]" value="En luna llena"> En luna llena <br>
                                <input type="checkbox" name="epoca_siembra[]" value="En cuarto menguante"> En cuarto menguante <br>
                                <input type="checkbox" name="epoca_siembra[]" value="En luna nueva"> En luna nueva <br>
                                <input type="checkbox" name="epoca_siembra[]" value="En cuarto creciente"> En cuarto creciente <br>
                            </div>
                        </div>

                        <!-- Pregunta 11 -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">11. PREDICCIÓN DE LAS EPOCAS DE LLUVIAS</label>
                            <div>
                                <label>Que son las cabañuelas:</label>
                                <textarea name="que_son_cabanuelas" rows="2" class="block mt-1 w-full"></textarea>
                            </div>

                            <div class="mt-2">
                                <label>Cuantos tipos de cabañuelas conoce</label>
                                <input type="text" name="tipos_cabanuelas" class="block mt-1 w-full">
                            </div>

                            <div class="mt-2">
                                <label>Cuando empiezan las cabañuelas grandes</label>
                                <input type="text" name="cabanuelas_grandes" class="block mt-1 w-full">
                            </div>

                            <div class="mt-2">
                                <label>Cuando empiezan las cabañuelas chiquitas</label>
                                <input type="text" name="cabanuelas_chiquitas" class="block mt-1 w-full">
                            </div>

                            <div class="mt-2">
                                <label>Con que festividad patronal o evento natural asocia las lluvias para las siembras:</label>
                                <textarea name="festividad_lluvias" rows="2" class="block mt-1 w-full"></textarea>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
