<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full h-[600px]">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Message Data') }}
                    </h4>
                    <table class="border-collapse border-slate-500">
                        <thead class="bg-gray-900 text-white">
                            <tr>
                                <th class="px-6 py-2 font-light border border-slate-600">Name</th>
                                <th class="px-6 py-2 font-light border border-slate-600">Email</th>
                                <th class="px-6 py-2 font-light border border-slate-600">Message</th>
                                <th class="px-6 py-2 font-light border border-slate-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class=" bg-slate-200">
                            @if ($datas->count() > 0)
                                @foreach ($datas as $data)
                                    <tr class=" text-gray-800">
                                        <td class="px-6 py-4 border border-slate-700">{{ $data->name }}</td>
                                        <td class="px-6 py-4 border border-slate-700">{{ $data->email }}</td>
                                        <td class="px-6 py-4 border border-slate-700">{{ $data->message }}</td>
                                        <td class="px-6 py-4 border border-slate-700">
                                            <form action="/message/{{ $data->id }}/delete" method="post"
                                                class="d-inline ">
                                                @method('delete')
                                                @csrf
                                                <x-delete-button :message="$data->name" class="bg-red-600">
                                                    Delete
                                                </x-delete-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h4 class="pb-3 font-semibold text-base text-red-500 leading-tight">
                                    {{ __('No Messages Yet.') }}
                                </h4>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
