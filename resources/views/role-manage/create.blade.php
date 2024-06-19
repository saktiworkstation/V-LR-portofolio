<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Role To User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Assign Role') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added Role To User Here...') }}
                            </p>
                        </header>

                        <form method="POST" action="{{ route('role-manage.store') }}" class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="user_id" :value="__('User')" />
                                <x-select-input id="user_id" name="user_id" required>
                                    <option value="">Choose User</option>
                                    @foreach ($users as $data)
                                        <option value="{{ $data->id }}"
                                            {{ old('user_id') == $data->id ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </x-select-input>
                                <x-input-error class="mt-2" :messages="$errors->get('user_id')" />
                            </div>
                            <div>
                                <x-input-label for="role_id" :value="__('User')" />
                                <x-select-input id="role_id" name="role_id" required>
                                    <option value="">Choose User</option>
                                    @foreach ($roles as $data)
                                        <option value="{{ $data->id }}"
                                            {{ old('role_id') == $data->id ? 'selected' : '' }}>
                                            {{ $data->name }}
                                        </option>
                                    @endforeach
                                </x-select-input>
                                <x-input-error class="mt-2" :messages="$errors->get('role_id')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
