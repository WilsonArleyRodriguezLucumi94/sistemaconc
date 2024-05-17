<!-- resources/views/admin/crear_encuesta.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ENCUESTA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DIAGNOSTICO SOCIO PRODUCTIVO Y CULTURAL, PARA CONOCER Y ANALIZAR LA SITUACIÓN DE LA PRODUCCIÓN EN LAS COMUNIDADES DE LOS MUNICIPIOS SUAREZ, BUENOS AIRES, SANTANDER DE QUILICHAO, CALOTO, CORINTO, MIRANDA, PADILLA, PUERTO TEJADA, GUACHENÉ Y VILLARRICA.
                    <!-- INFORMACION DEL ENCUESTADO -->
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Formulario -->
                    <form method="POST" action="{{ route('encuesta.store') }}">
                        @csrf

                        <!-- Nombres y Apellidos -->
                        <div class="mb-4">
                            <x-label for="nombres_apellidos" :value="__('NOMBRES Y APELLIDOS')" />
                            <x-input id="nombres_apellidos" class="block mt-1 w-full" type="text" name="nombres_apellidos" required autofocus />
                        </div>

                        <!-- Vereda -->
                        <div class="mb-4">
                            <x-label for="vereda" :value="__('VEREDA')" />
                            <x-input id="vereda" class="block mt-1 w-full" type="text" name="vereda" required />
                        </div>

                        <!-- Municipio -->
                        <div class="mb-4">
                            <x-label for="municipio" :value="__('MUNICIPIO')" />
                            <x-input id="municipio" class="block mt-1 w-full" type="text" name="municipio" required />
                        </div>

                        <!-- Departamento -->
                        <div class="mb-4">
                            <x-label for="departamento" :value="__('DEPARTAMENTO')" />
                            <x-input id="departamento" class="block mt-1 w-full" type="text" name="departamento" required />
                        </div>

                        <!-- Responsable -->
                        <div class="mb-4">
                            <x-label for="responsable" :value="__('RESPONSABLE')" />
                            <x-input id="responsable" class="block mt-1 w-full" type="text" name="responsable" required />
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-4">
                            <x-label for="email" :value="__('CORREO ELECTRÓNICO')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required />
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Enviar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
