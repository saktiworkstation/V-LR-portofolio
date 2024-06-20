<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <x-link-primary-button :url="route('skill.create')">{{ __('Add New Skill') }}</x-link-primary-button>
                </div>
                @if (session()->has('success'))
                    <x-success-alert>
                        {{ session('success') }}
                    </x-success-alert>
                @endif
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-4xl">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Skill Data') }}
                    </h4>
                    <table class="border-collapse border-slate-500">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-2 border border-slate-600">skill Name</th>
                                <th class="px-6 py-2 border border-slate-600">Desciption</th>
                                <th class="px-6 py-2 border border-slate-600">Skill Level</th>
                                <th class="px-6 py-2 border border-slate-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-500">
                            @if ($datas->count() > 0)
                                @foreach ($datas as $data)
                                    <tr class="text-white">
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->name }}</td>
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->description }}</td>
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->skill_level }}</td>
                                        <td class="px-6 py-2 border border-slate-700">
                                            <a href="/skill/{{ $data->id }}/edit" class="">
                                                Edit</span>
                                            </a>
                                            <form action="/skill/{{ $data->id }}/delete" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class=""
                                                    onclick="return confirm('Are you sure want to delete {{ $data->name }}?')">
                                                    Hapus</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h4 class="pb-3 font-semibold text-base text-red-500 leading-tight">
                                    {{ __('You dont have a Skill yet.') }}
                                </h4>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
