<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <x-link-primary-button :url="route('project.create')">{{ __('Add New Project') }}</x-link-primary-button>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-4xl">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Project Data') }}
                    </h4>
                    <table class="border-collapse border-slate-500">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-2 border border-slate-600">Name Project</th>
                                <th class="px-6 py-2 border border-slate-600">Description</th>
                                <th class="px-6 py-2 border border-slate-600">Image</th>
                                <th class="px-6 py-2 border border-slate-600">Link Project</th>
                                <th class="px-6 py-2 border border-slate-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-500">
                            @foreach ($datas as $data)
                                <tr class="text-white">
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->name }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->description }}</td>
                                    <td class="px-6 py-2 border border-slate-700">
                                        @if ($data->img != '')
                                            <img src="{{ asset('storage/' . $data->img) }}" alt="">
                                        @endif
                                    </td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->link }}</td>
                                    <td class="px-6 py-2 border border-slate-700">
                                        <a href="/project/{{ $data->id }}/edit" class="">
                                            Edit</span>
                                        </a>
                                        <form action="/project/{{ $data->id }}/delete" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class=""
                                                onclick="return confirm('Are you sure want to delete {{ $data->company }}?')">
                                                Hapus</span>
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
