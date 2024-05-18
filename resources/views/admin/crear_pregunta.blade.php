<!-- resources/views/admin/crear_pregunta.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Pregunta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Formulario -->
                    <form method="POST" action="{{ route('preguntas.store') }}">
                        @csrf

                        <!-- Pregunta -->
                        <div class="mb-4">
                            <x-label for="pregunta" :value="__('Pregunta')" />
                            <x-input id="pregunta" class="block mt-1 w-full" type="text" name="pregunta" required autofocus />
                        </div>

                        <!-- Caracterización -->
                        <div class="mb-4">
                            <x-label for="caracterizacion_id" :value="__('Caracterización')" />
                            <select id="caracterizacion_id" name="caracterizacion_id" class="block mt-1 w-full">
                                @foreach($caracterizaciones as $caracterizacion)
                                    <option value="{{ $caracterizacion->id }}">{{ $caracterizacion->nombre_caracterizacion }}</option>
                                @endforeach
                            </select>
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
