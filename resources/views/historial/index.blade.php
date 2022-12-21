<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left"><i class="fa-solid fa-calendar-days"></i> Periodo</th>
                                <th scope="col" class="px-6 py-4 text-left"><i class="fa-solid fa-file-lines"></i> Beca </th>
                                <th scope="col" class="px-6 py-4 text-left"><i class="fa-solid fa-bars-progress"></i> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap" > Agosto - Diciembre </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> Posgrado </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> Pendiente </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
