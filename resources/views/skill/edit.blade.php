<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Edit Skill') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Edit Skill') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Added your newes Skill here.') }}
                            </p>
                        </header>

                        <form method="POST" action="/skill/{{ $data->id }}/update" class="mt-6 space-y-6">
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
                                <x-input-label for="skill_level" :value="__('Skill Level')" />
                                <x-select-input id="skill_level" name="skill_level" required>
                                    <option value="">Pilih Tingkat Skill</option>
                                    <option value="Beginner"
                                        {{ old('skill_level', $data->skill_level) == 'Beginner' ? 'selected' : '' }}>
                                        Beginner</option>
                                    <option value="Intermediate"
                                        {{ old('skill_level', $data->skill_level) == 'Intermediate' ? 'selected' : '' }}>
                                        Intermediate
                                    </option>
                                    <option value="Advanced"
                                        {{ old('skill_level', $data->skill_level) == 'Advanced' ? 'selected' : '' }}>
                                        Advanced</option>
                                    <option value="Expert"
                                        {{ old('skill_level', $data->skill_level) == 'Expert' ? 'selected' : '' }}>
                                        Expert
                                    </option>
                                </x-select-input>
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
