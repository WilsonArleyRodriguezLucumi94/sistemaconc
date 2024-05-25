<!-- resources/views/admin/caracterizacion_uno.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CARACTERIZACION UNO') }}
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
                    <h3 class="text-2xl font-bold mb-6">Crear Pregunta</h3>

                    @if(session('success'))
                        <div class="bg-green-500 text-white p-3 rounded-lg mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.guardarPregunta') }}">
                        @csrf
                        <!-- Pregunta 1 -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">1) SEXO</label>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sexo" value="Masculino" class="form-radio">
                                    <span class="ml-2">Masculino</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" name="sexo" value="Femenino" class="form-radio">
                                    <span class="ml-2">Femenino</span>
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 2 -->
                        <div class="mb-4">
                            <label for="edad_cumplida" class="block text-sm font-medium text-gray-700">2) EDAD CUMPLIDA</label>
                            <input type="number" id="edad_cumplida" name="edad_cumplida" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Pregunta 3 -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">3) SABE LEER Y ESCRIBIR</label>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="sabe_leer_escribir" value="Si" class="form-radio">
                                    <span class="ml-2">Si</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" name="sabe_leer_escribir" value="No" class="form-radio">
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 4 -->
                        <div class="mb-4">
                            <label for="numero_dependientes" class="block text-sm font-medium text-gray-700">4) NÚMERO DE PERSONAS QUE DEPENDEN DEL JEFE DE LA FAMILIA</label>
                            <input type="number" id="numero_dependientes" name="numero_dependientes" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Pregunta 5 -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">5) ORGANIZACIÓN A LA QUE PERTENECE</label>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="organizacion[]" value="Junta de Acción Comunal" class="form-checkbox">
                                    <span class="ml-2">Junta de Acción Comunal</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="checkbox" name="organizacion[]" value="Asociación de productores" class="form-checkbox">
                                    <span class="ml-2">Asociación de productores</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="checkbox" name="organizacion[]" value="Consejo Comunitario" class="form-checkbox">
                                    <span class="ml-2">Consejo Comunitario</span>
                                </label>
                            </div>
                        </div>

                        <!-- Pregunta 6 -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">6) ¿CUÁL ES LA PRINCIPAL ACTIVIDAD?</label>
                            <div class="mt-2">
                                @foreach(['Producción agrícola', 'Producción pecuaria', 'Producción agropecuaria', 'Oficios domésticos', 'Jornalero', 'Empleado', 'Minero', 'Obrero', 'Comerciante', 'Oficios (Albañil, fontanero, etc.)', 'Empleado de la empresa privada', 'Empleado del gobierno', 'Empleado del consejo comunitario'] as $actividad)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="actividad_principal[]" value="{{ $actividad }}" class="form-checkbox">
                                        <span class="ml-2">{{ $actividad }}</span>
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                        </div>

                        <!-- Pregunta 6.1 -->
                        <div class="mb-4">
                            <label for="actividad_secundaria" class="block text-sm font-medium text-gray-700">6.1) ¿Cuál es la actividad complementaria o secundaria?</label>
                            <input type="text" id="actividad_secundaria" name="actividad_secundaria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Pregunta 7 -->
<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">7) ¿CUÁL ES LA PRINCIPAL FUENTE DE INGRESOS DE LA FAMILIA?</label>
    <div class="mt-2">
        <!-- Venta de productos agrícolas -->
        <label class="block text-sm font-medium text-gray-700">Venta de productos agrícolas</label>
        <label class="inline-flex items-center">
            <input type="checkbox" name="fuente_ingresos[]" value="Cacao" class="form-checkbox">
            <span class="ml-2">Cacao</span>
        </label>
        <label class="inline-flex items-center ml-6">
            <input type="checkbox" name="fuente_ingresos[]" value="Café" class="form-checkbox">
            <span class="ml-2">Café</span>
        </label>
        <!-- Agrega las demás opciones para la venta de productos agrícolas -->

        <!-- Venta de productos pecuarios -->
        <label class="block text-sm font-medium text-gray-700 mt-4">Venta de productos pecuarios</label>
        <label class="inline-flex items-center">
            <input type="checkbox" name="fuente_ingresos[]" value="Cerdos" class="form-checkbox">
            <span class="ml-2">Cerdos</span>
        </label>
        <label class="inline-flex items-center ml-6">
            <input type="checkbox" name="fuente_ingresos[]" value="Ganado" class="form-checkbox">
            <span class="ml-2">Ganado</span>
        </label>
        <!-- Agrega las demás opciones para la venta de productos pecuarios -->

        <!-- Venta de productos forestales -->
        <label class="block text-sm font-medium text-gray-700 mt-4">Venta de productos forestales</label>
        <label class="inline-flex items-center">
            <input type="checkbox" name="fuente_ingresos[]" value="Venta de carbón" class="form-checkbox">
            <span class="ml-2">Venta de carbón</span>
        </label>
        <label class="inline-flex items-center ml-6">
            <input type="checkbox" name="fuente_ingresos[]" value="Venta de guadua" class="form-checkbox">
            <span class="ml-2">Venta de guadua</span>
        </label>
        <!-- Agrega las demás opciones para la venta de productos forestales -->

        <!-- Otras actividades -->
        <label class="block text-sm font-medium text-gray-700 mt-4">Otras actividades</label>
        <label class="inline-flex items-center">
            <input type="checkbox" name="fuente_ingresos[]" value="Transformación de productos y subproductos agrícolas y pecuarios" class="form-checkbox">
            <span class="ml-2">Transformación de productos y subproductos agrícolas y pecuarios</span>
        </label>
        <label class="inline-flex items-center ml-6">
            <input type="checkbox" name="fuente_ingresos[]" value="Otra actividad distinta a la producción agropecuaria" class="form-checkbox">
            <span class="ml-2">Otra actividad distinta a la producción agropecuaria</span>
        </label>
        <!-- Agrega las demás opciones para otras actividades -->
    </div>
</div>

                        <!-- Pregunta 8 -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">8) ¿CUÁL ES SU INGRESO FAMILIAR PROMEDIO MENSUAL?</label>
                            <div class="mt-2">
                                @foreach(['Menos de un salario mínimo mensual', 'Un salario mínimo mensual', 'Uno y medio salario mínimo mensual', 'Dos salarios mínimos mensuales', 'Tres salarios mínimos mensuales y más'] as $ingreso)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="ingreso_promedio[]" value="{{ $ingreso }}" class="form-checkbox">
                                        <span class="ml-2">{{ $ingreso }}</span>
                                    </label>
                                    <br>
                                @endforeach
                            </div>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar Pregunta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
