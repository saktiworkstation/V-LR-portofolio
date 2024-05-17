<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Edit Project') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added your newes Project here.') }}
                            </p>
                        </header>

                        <form method="POST" action="/project/{{ $data->id }}/update" class="mt-6 space-y-6">
                            @csrf
                            @method('PUT')
                            <div>
                                <x-input-label for="name" :value="__('name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $data->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('description')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" :value="old('description', $data->description)" required autofocus
                                    autocomplete="description" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>
                            <div>
                                <x-input-label for="url" :value="__('url')" />
                                <x-text-input id="url" name="url" type="text" class="mt-1 block w-full"
                                    :value="old('url', $data->url)" required autofocus autocomplete="url" />
                                <x-input-error class="mt-2" :messages="$errors->get('url')" />
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
