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
                    <x-link-primary-button :url="route('project.create')" class="bg-green-600 font-thin">{{ __('Add New Project') }}</x-link-primary-button>
                </div>
                @if (session()->has('success'))
                    <x-success-alert>
                        {{ session('success') }}
                    </x-success-alert>
                @endif
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full h-[500px]">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Project Data') }}
                    </h4>
                    <table class="border-collapse border-slate-500 w-full">
                        <thead class="bg-gray-900 text-white">
                            <tr>
                                <th class="px-6 py-2 font-light border border-slate-600">Name Project</th>
                                <th class="px-6 py-2 font-light border border-slate-600">Description</th>
                                <th class="px-6 py-2 font-light border border-slate-600">Image</th>
                                <th class="px-6 py-2 font-light border border-slate-600">Link Project</th>
                                <th class="px-6 py-2 font-light border border-slate-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-slate-200">
                            @if ($datas->count() > 0)
                                @foreach ($datas as $data)
                                    <tr class="text-gray-900">
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->name }}</td>
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->description }}</td>
                                        <td class="px-6 py-2 border border-slate-700">
                                            @if ($data->img != '')
                                                <img src="{{ asset('storage/' . $data->img) }}" alt="">
                                            @endif
                                        </td>
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->link }}</td>
                                        <td class="px-6 py-2 border border-slate-700">
                                            <x-link-small-button :url="url('/project/' . $data->id . '/edit')" class=" w-[75px] h-[30px] mb-2">
                                                {{ __('Edit') }}
                                            </x-link-small-button>
                                            <form action="/project/{{ $data->id }}/delete" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <x-delete-button :message="$data->name"  class=" w-[75px] h-[30px] bg-red-600 ">
                                                    Delete
                                                </x-delete-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h4 class="pb-3 font-semibold text-base text-red-500 leading-tight">
                                    {{ __('You dont have a Project yet.') }}
                                </h4>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
