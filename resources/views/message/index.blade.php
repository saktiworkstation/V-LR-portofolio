<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <x-link-primary-button :url="route('message')">{{ __('Add New Message') }}</x-link-primary-button>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-4xl">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Message Data') }}
                    </h4>
                    <table class="border-collapse border-slate-500">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-2 border border-slate-600">Name</th>
                                <th class="px-6 py-2 border border-slate-600">Email</th>
                                <th class="px-6 py-2 border border-slate-600">Message</th>
                                <th class="px-6 py-2 border border-slate-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-500">
                            @foreach ($datas as $data)
                                <tr class="text-white">
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->name }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->email }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->message }}</td>
                                    <td class="px-6 py-2 border border-slate-700">
                                        <a href="/message/{{ $data->id }}/edit" class="">
                                            Edit</span>
                                        </a>
                                        <form action="/message/{{ $data->id }}/delete" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class=""
                                                onclick="return confirm('Are you sure want to delete message from {{ $data->name }}?')">
                                                Delete</span>
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
</x-app-layout>
