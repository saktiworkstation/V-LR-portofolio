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
                    @if (session()->has('success'))
                        <x-success-alert>
                            {{ session('success') }}
                        </x-success-alert>
                    @endif
                    <table class="border-collapse border-slate-500 mt-3">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-2 border border-slate-600">User</th>
                                <th class="px-6 py-2 border border-slate-600">Content</th>
                                <th class="px-6 py-2 border border-slate-600">Star</th>
                                <th class="px-6 py-2 border border-slate-600">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-500">
                            @if ($datas->count() > 0)
                                @foreach ($datas as $data)
                                    <tr class="text-white">
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->user_id }}</td>
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->content }}</td>
                                        <td class="px-6 py-2 border border-slate-700">{{ $data->star }}</td>
                                        <td class="px-6 py-2 border border-slate-700">
                                            @if (Auth::user()->id == $data->user_id)
                                                <a href="/rating/{{ $data->id }}/edit" class="">
                                                    Edit</span>
                                                </a>
                                                <form action="/rating/{{ $data->id }}/delete" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button
                                                        class="inline-flex items-center px-3 py-1 bg-gray-800 border border-transparent rounded-md font-medium text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                                        onclick="return confirm('Are you sure want to delete {{ $data->company }}?')">
                                                        Hapus</span>
                                                    </button>
                                                </form>
                                            @else
                                                <span class="pb-3 font-semibold text-base text-red-500 leading-tight">
                                                    {{ __('No Access.') }}
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h4 class="pb-3 font-semibold text-base text-red-500 leading-tight">
                                    {{ __('No Ratings Yet.') }}
                                </h4>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
