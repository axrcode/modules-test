<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-6 flex justify-end">
                <a  href="{{ route('hospitaler.patient.create') }}"
                    class="items-center px-4 py-2 mb-4 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Crear Paciente') }}
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3" style="width: 30%">
                                        Nombre
                                    </th>
                                    <th class="px-6 py-3" style="width: 10%">
                                        Código
                                    </th>
                                    <th class="px-6 py-3" style="width: 20%">
                                        Dirección
                                    </th>
                                    <th class="px-6 py-3" style="width: 20%">
                                        Teléfono
                                    </th>
                                    <th class="px-6 py-3" style="width: 10%">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($patients as $patient)
                                <tr class="bg-white border-b text-gray-900">
                                    <th class="px-6 py-4">
                                        {{ $patient->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $patient->code }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $patient->address }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $patient->phone }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a  href="{{ route('hospitaler.patient.edit', $patient->id) }}"
                                            class="px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase">
                                            {{ __('Editar') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
