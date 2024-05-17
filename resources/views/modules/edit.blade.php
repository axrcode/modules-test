<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Modules') }}
      </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
               
               <div class="relative overflow-x-auto">
                  <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                           <tr>
                              <th class="px-6 py-3" style="width: 70%">
                                 Modulo
                              </th>
                              <th class="px-6 py-3" style="width: 30%">
                                 Estado
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach ($modules as $module)
                           <tr class="bg-white border-b text-gray-900">
                              <th class="px-6 py-4">
                                 {{ $module->name }}
                              </th>
                              <td class="px-6 py-4 text-center">
                                 <form method="post" action="{{ route('modules.enable') }}">
                                    @csrf
                                    <input type="hidden" name="module_id" id="module_id" value="{{ $module->id }}">
                                    <button type="submit"
                                       class="px-4 py-2 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase"
                                       style="@if ( boolval($module->enable) ) background: red; color: white; @else background: green; color: white; @endif">
                                       @if ( boolval($module->enable) ) {{ __('Deshabilitar') }} @else {{ __('Habilitar') }} @endif
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
   </div>
</x-app-layout>
