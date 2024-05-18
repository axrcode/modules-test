<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">

            <div class="relative overflow-x-auto">

                <div class="px-6 py-4">
                    <input type="text" wire:model.live="search" placeholder="Buscar"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-xs">
                </div>

                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3" style="width: 50%">
                                Documento
                            </th>
                            <th class="px-6 py-3" style="width: 40%">
                                Serie
                            </th>
                            <th class="px-6 py-3" style="width: 10%">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if ( $documents->count() )

                    @foreach ($documents as $document)
                        <tr class="bg-white border-b text-gray-900">
                            <th class="px-6 py-4">
                                {{ $document->name }}
                            </th>
                            <th class="px-6 py-4">
                                {{ $document->serie }}
                            </th>
                            <td class="text-center px-6 py-4">
                                @livewire('sales.document.edit-document', ['document' => $document], key($document->id))
                            </td>
                        </tr>
                    @endforeach

                    @else
                        <tr class="bg-white border-b text-gray-900">
                            <th colspan="3" class="text-center px-6 py-4">
                                No se encontraron resultados
                            </th>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
