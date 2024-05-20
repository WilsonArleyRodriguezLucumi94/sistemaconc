<!-- resources/views/admin/caracterizacion_tres.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CARACTERIZACIÓN 3') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('guardar.caracterizacion3') }}">
                        @csrf

                        <!-- Pregunta 12 -->
                        <div>
                            <label class="block font-medium text-sm text-gray-700">12. CARACTERISTICAS DE LAS FORMAS DE TRABAJO</label>
                            <div>
                                <input type="radio" name="formas_trabajo[]" value="La mano cambiada"> La mano cambiada <br>
                                <input type="radio" name="formas_trabajo[]" value="La minga"> La minga <br>
                                <input type="radio" name="formas_trabajo[]" value="Trabajo comunitario"> Trabajo comunitario <br>
                                <input type="radio" name="formas_trabajo[]" value="La tonga"> La tonga <br>
                            </div>
                        </div>

                        <!-- Pregunta 13 -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">13. MANERAS RELACIONADOS CON LA TENENCIA DE LA PROPIEDAD</label>
                            <div>
                                <input type="radio" name="tenencia_propiedad[]" value="Propietario"> Propietario <br>
                                <input type="radio" name="tenencia_propiedad[]" value="Arrendatario"> Arrendatario <br>
                                <input type="radio" name="tenencia_propiedad[]" value="Propietario colectivo"> Propietario colectivo <br>
                                <input type="radio" name="tenencia_propiedad[]" value="Tenedor del bien"> Tenedor del bien <br>
                                <input type="radio" name="tenencia_propiedad[]" value="Albacea del bien"> Albacea del bien <br>
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
