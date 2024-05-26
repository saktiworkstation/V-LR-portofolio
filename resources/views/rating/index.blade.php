<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rating') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-4xl">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Rating Data') }}
                    </h4>
                    <table class="border-collapse border-slate-500">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-2 border border-slate-600">User</th>
                                <th class="px-6 py-2 border border-slate-600">Content</th>
                                <th class="px-6 py-2 border border-slate-600">Star</th>
                                <th class="px-6 py-2 border border-slate-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-500">
                            @foreach ($datas as $data)
                                <tr class="text-white">
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->user_id }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->content }}</td>
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->star }}</td>
                                    <td class="px-6 py-2 border border-slate-700">
                                        <a href="/rating/{{ $data->id }}/edit" class="">
                                            Edit</span>
                                        </a>
                                        <form action="/rating/{{ $data->id }}/delete" method="post"
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
