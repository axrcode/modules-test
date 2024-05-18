<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-6 flex justify-end">
                @livewire('sales.document.create-document')
            </div>

            @livewire('sales.document.list-documents')
        </div>
    </div>
</x-app-layout>
