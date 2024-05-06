<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Experience') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Experience Data') }}
                    <table class="border-collapse border-slate-500">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-2 border border-slate-600">Company</th>
                                <th class="px-6 py-2 border border-slate-600">Order</th>
                                <th class="px-6 py-2 border border-slate-600">Field</th>
                                <th class="px-6 py-2 border border-slate-600">Duration</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-500">
                            @foreach ($datas as $data)
                                <tr class="text-white">
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->company }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->order }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->field }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->duration }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
