<div>
    <button type="button" wire:click="$set('open', true)"
        class="px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase">
        {{ __('Editar') }}
    </button>

    @if ( $open )
    <div id="modal" class="bg-gray-800 bg-opacity-50 fixed z-50 flex items-center justify-center w-full md:inset-0 max-h-full">
        <div class="mx-auto bg-white rounded-lg shadow w-1/3">
            <div class="p-4 md:p-5">

                <div class="text-left max-w-7xl mx-auto">
                    <div class="p-4 text-gray-900">
                        {{ __("Editar Documento") }}

                        <div class="mt-6 space-y-6">
                            <div>
                                <label class='block font-medium text-sm text-gray-700'>
                                    Nombre {{ $name }}
                                </label>
                                <input type="text" id="name" name="name" wire:model="name"
                                    class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>

                                @error('document.name')
                                    <span class="text-red-500 font-semibold">Ingrese el nombre del documento</span>
                                @enderror
                            </div>

                            <div>
                                <label class='block font-medium text-sm text-gray-700'>
                                    Serie
                                </label>
                                <input type="text" id="serie" name="serie" wire:model="serie"
                                    class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>
                                
                                @error('serie')
                                    <span class="text-red-500 font-semibold">Ingrese la serie del documento</span>
                                @enderror
                            </div>

                            <div>
                                <button type="button" wire:click='update'
                                    class="items-center px-4 py-2 mb-4 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm">
                                    {{ __('Guardar') }}
                                </button>

                                <button type="button" wire:click="$set('open', false)"
                                    class="items-center px-4 py-2 mb-4 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm">
                                    {{ __('Cancelar') }}
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
    @endif
</div>
