<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role Manage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <x-link-primary-button :url="route('role-manage.create')">{{ __('Assign Role to USer') }}</x-link-primary-button>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-4xl">
                    <h4 class="pb-3 font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('role-manage Data') }}
                    </h4>
                    <table class="border-collapse border-slate-500">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-2 border border-slate-600">User Name</th>
                                <th class="px-6 py-2 border border-slate-600">User Role</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-500">
                            @foreach ($datas as $data)
                                <tr class="text-white">
                                    <td class="px-6 py-2 border border-slate-700">{{ $data->name }}</td>
                                    <td class="px-6 py-2 border border-slate-700">
                                        @foreach ($data->roles as $role)
                                            <form action="/role-manage/{{ $data->id }}/delete/{{ $role->name }}"
                                                method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button
                                                    class="inline-flex items-center px-3 py-1 bg-gray-800 border border-transparent rounded-md font-medium text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                                    onclick="return confirm('Are you sure want to delete {{ $role->name }}?')">{{ $role->name }}</span>
                                                </button>
                                            </form>
                                        @endforeach
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
