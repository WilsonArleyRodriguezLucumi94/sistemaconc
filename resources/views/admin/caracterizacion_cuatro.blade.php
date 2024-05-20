<!-- resources/views/admin/caracterizacion_cuatro.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CARACTERIZACIÓN 4') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('guardar.caracterizacion4') }}">
                        @csrf

                        <!-- Pregunta 14 -->
                        <div>
                            <label class="block font-medium text-sm text-gray-700">14. CARACTERISTICAS DE LAS FORMAS DE TRABAJO</label>
                            <div>
                                <input type="checkbox" name="formas_trabajo[]" value="La mano cambiada"> La mano cambiada <br>
                                <input type="checkbox" name="formas_trabajo[]" value="La minga"> La minga <br>
                                <input type="checkbox" name="formas_trabajo[]" value="Trabajo comunitario"> Trabajo comunitario <br>
                                <input type="checkbox" name="formas_trabajo[]" value="La tonga"> La tonga <br>
                            </div>
                        </div>

                        <!-- Pregunta 15 -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">15. MANERAS RELACIONADOS CON LA TENENCIA DE LA PROPIEDAD</label>
                            <div>
                                <input type="checkbox" name="tenencia_propiedad[]" value="Propietario"> Propietario <br>
                                <input type="checkbox" name="tenencia_propiedad[]" value="Arrendatario"> Arrendatario <br>
                                <input type="checkbox" name="tenencia_propiedad[]" value="Propietario colectivo"> Propietario colectivo <br>
                                <input type="checkbox" name="tenencia_propiedad[]" value="Tenedor del bien"> Tenedor del bien <br>
                                <input type="checkbox" name="tenencia_propiedad[]" value="Albacea del bien"> Albacea del bien <br>
                            </div>
                        </div>

                        <!-- Pregunta 16 -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">16. AREAS PARA SEMBRAR</label>
                            <div>
                                <input type="radio" name="areas_para_sembrar" value="De 1.000 a 5.000 m2"> De 1.000 a 5.000 m2 <br>
                                <input type="radio" name="areas_para_sembrar" value="De 5.001 a 10.000 m2"> De 5.001 a 10.000 m2 <br>
                                <input type="radio" name="areas_para_sembrar" value="De 10.001 a 15.000 m2"> De 10.001 a 15.000 m2 <br>
                                <input type="radio" name="areas_para_sembrar" value="De 15.001 m2 y más"> De 15.001 m2 y más <br>
                            </div>
                        </div>

                        <!-- Pregunta 17 -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">17. CANTIDAD DE JORNALES Y TIPO DE FERTILIZACIÓN</label>
                            <div>
                                <label>Cuántos jornales emplea para el establecimiento de la unidad productiva:</label>
                                <input type="number" name="cantidad_jornales" class="form-input rounded-md shadow-sm mt-1 block w-full">

                                <label>Qué tipo de abonos utiliza para fertilización:</label>
                                <input type="checkbox" name="tipo_fertilizacion[]" value="Químicos"> Químicos <br>
                                <input type="checkbox" name="tipo_fertilizacion[]" value="Orgánicos"> Orgánicos <br>
                            </div>
                        </div>

                        <!-- Pregunta 18 -->
                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">18. ¿DONDE VENDE SUS PRODUCTOS?</label>
                            <div>
                                <input type="checkbox" name="donde_vende[]" value="Plazas de mercado"> Plazas de mercado <br>
                                <input type="checkbox" name="donde_vende[]" value="Supermercados"> Supermercados <br>
                                <input type="checkbox" name="donde_vende[]" value="Tiendas de barrios"> Tiendas de barrios <br>
                                <input type="checkbox" name="donde_vende[]" value="Fruver"> Fruver <br>
                                <input type="checkbox" name="donde_vende[]" value="Por familias"> Por familias <br>
                                <input type="checkbox" name="donde_vende[]" value="Otro"> Otro, ¿Cuál?: 
                                <input type="text" name="otro_donde_vende" class="form-input rounded-md shadow-sm mt-1 block w-full">
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