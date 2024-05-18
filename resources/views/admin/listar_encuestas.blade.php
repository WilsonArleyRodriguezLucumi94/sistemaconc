<!-- resources/views/admin/listar_encuestas.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Encuestados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombres y Apellidos
                                    <input type="text" class="mt-1 block w-full" placeholder="Filtrar..." id="filter-nombres-apellidos">
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Vereda
                                    <input type="text" class="mt-1 block w-full" placeholder="Filtrar..." id="filter-vereda">
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Municipio
                                    <input type="text" class="mt-1 block w-full" placeholder="Filtrar..." id="filter-municipio">
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Departamento
                                    <input type="text" class="mt-1 block w-full" placeholder="Filtrar..." id="filter-departamento">
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Responsable
                                    <input type="text" class="mt-1 block w-full" placeholder="Filtrar..." id="filter-responsable">
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Correo Electrónico
                                    <input type="text" class="mt-1 block w-full" placeholder="Filtrar..." id="filter-email">
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody id="encuestas-tbody" class="bg-white divide-y divide-gray-200">
                            @foreach ($encuestas as $encuesta)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $encuesta->nombres_apellidos }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $encuesta->vereda }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $encuesta->municipio }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $encuesta->departamento }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $encuesta->responsable }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $encuesta->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 flex space-x-2">
                                        <!-- Botón de Editar -->
                                        <a href="{{ route('encuesta.edit', $encuesta->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Editar
                                        </a>
                                        <!-- Botón de Caracterizacion -->
                                        <a href="{{ route('encuesta.edit', $encuesta->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Caracterización
                                        </a>
                                        <!-- Botón de Eliminar -->
                                        <form method="POST" action="{{ route('encuesta.destroy', $encuesta->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filters = {
            'nombres-apellidos': '',
            'vereda': '',
            'municipio': '',
            'departamento': '',
            'responsable': '',
            'email': ''
        };

        function filterTable() {
            const rows = document.querySelectorAll('#encuestas-tbody tr');
            rows.forEach(row => {
                let showRow = true;
                Object.keys(filters).forEach(filterKey => {
                    const filterValue = filters[filterKey].toLowerCase();
                    const cell = row.querySelector(`td:nth-child(${Object.keys(filters).indexOf(filterKey) + 1})`);
                    if (cell && !cell.textContent.toLowerCase().includes(filterValue)) {
                        showRow = false;
                    }
                });
                row.style.display = showRow ? '' : 'none';
            });
        }

        Object.keys(filters).forEach(filterKey => {
            document.getElementById(`filter-${filterKey}`).addEventListener('input', function (event) {
                filters[filterKey] = event.target.value;
                filterTable();
            });
        });
    });
</script>
