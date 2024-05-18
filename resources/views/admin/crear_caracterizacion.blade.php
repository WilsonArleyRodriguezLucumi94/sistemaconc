<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Caracterización') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('caracterizacion.store') }}">
                        @csrf

                        <!-- Nombre de la Caracterización -->
                        <div class="mb-4">
                            <x-label for="nombre_caracterizacion" :value="__('Nombre de la Caracterización')" />
                            <x-input id="nombre_caracterizacion" class="block mt-1 w-full" type="text" name="nombre_caracterizacion" required autofocus />
                        </div>

                        <!-- Observación de la Caracterización -->
                        <div class="mb-4">
                            <x-label for="observacion_caracterizacion" :value="__('Observación de la Caracterización')" />
                            <textarea id="observacion_caracterizacion" class="block mt-1 w-full" name="observacion_caracterizacion"></textarea>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Crear') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
