<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Personal Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Personal Data') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added fill  your personal data here.') }}
                            </p>

                            @if (session()->has('success'))
                                <x-success-alert>
                                    {{ session('success') }}
                                </x-success-alert>
                            @endif
                        </header>

                        <form method="POST" action="/personal/update" class="mt-6 space-y-6">
                            @csrf
                            @method('PUT')
                            <div>
                                <x-input-label for="number" :value="__('Phone Number')" />
                                <x-text-input id="number" name="number" type="number" class="mt-1 block w-full"
                                    :value="old('number', $data->number)" required autofocus autocomplete="number"
                                    placeholder="Your phone number" />
                                <x-input-error class="mt-2" :messages="$errors->get('number')" />
                            </div>
                            <div>
                                <x-input-label for="address" :value="__('Phone address')" />
                                <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                                    :value="old('address', $data->address)" required autofocus autocomplete="address"
                                    placeholder="Your address" />
                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                            </div>
                            <div>
                                <x-input-label for="linkporto" :value="__('Phone linkporto')" />
                                <x-text-input id="linkporto" name="linkporto" type="text" class="mt-1 block w-full"
                                    :value="old('linkporto', $data->linkporto)" required autofocus autocomplete="linkporto"
                                    placeholder="Link your other porto like github or linkedin" />
                                <x-input-error class="mt-2" :messages="$errors->get('linkporto')" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('Phone description')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" :value="old('description', $data->description)" required autofocus
                                    autocomplete="description" placeholder="Describe yourself" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
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
