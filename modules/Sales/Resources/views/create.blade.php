<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Venta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Crear Nueva Venta") }}

                    <form method="post" action="{{ route('sales.store') }}" class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <label class='block font-medium text-sm text-gray-700'>
                                Fecha
                            </label>
                            <input type="date" id="date" name="date"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>
                        </div>

                        <div>
                            <label class='block font-medium text-sm text-gray-700'>
                                Documento
                            </label>
                            <select id="document_id" name="document_id"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'
                            >
                            @foreach ($documents as $document)
                                <option value="{{ $document->id }}">{{ $document->name }} {{ $document->serie }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div>
                            <label class='block font-medium text-sm text-gray-700'>
                                Cliente
                            </label>
                            <select id="customer_id" name="customer_id"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'
                            >
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div>
                            <label class='block font-medium text-sm text-gray-700'>
                                Total
                            </label>
                            <input type="number" id="amount" name="amount"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>
                        </div>

                        <div>
                            <button type="submit"
                                class="items-center px-4 py-2 mb-4 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Guardar') }}
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
