<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Actualizar Cliente") }}

                    <form method="post" action="{{ route('sales.customer.update', $customer->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class='block font-medium text-sm text-gray-700'>
                                Nombre
                            </label>
                            <input type="text" id="name" name="name" value="{{ $customer->name }}"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>
                        </div>

                        <div>
                            <label class='block font-medium text-sm text-gray-700'>
                                Nit
                            </label>
                            <input type="text" id="nit" name="nit" value="{{ $customer->nit }}"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>
                        </div>

                        <div>
                            <label class='block font-medium text-sm text-gray-700'>
                                Dirección
                            </label>
                            <input type="text" id="address" name="address" value="{{ $customer->address }}"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>
                        </div>

                        <div>
                            <button type="submit"
                                class="items-center px-4 py-2 mb-4 bg-green-800 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Actualizar Cliente') }}
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
