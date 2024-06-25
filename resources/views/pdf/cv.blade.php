<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }} - CV</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex justify-center content-center">
    <!-- outer container -->
    <div class="border border-gray-300 rounded-sm shadow-lg py-10 px-10 w-4/5 mt-10 mb-10">
        <!-- Kiri -->
        <main class="flex gap-x-10 mt-10">
            <div class="w-2/6">
                <!-- contact details -->
                <strong class="text-3xl font-medium">{{ $user->name }}</strong>
                <ul class="mt-2 mb-10">
                    <li class="px-2 mt-1"><strong class="mr-1">Phone </strong>
                        <a href="tel:+821023456789" class="block">{{ $user->number }}</a>
                    </li>
                    <li class="px-2 mt-1"><strong class="mr-1">E-mail </strong>
                        <a href="mailto:" class="block">{{ $user->email }}</a>
                    </li>
                    <li class="px-2 mt-1"><strong class="mr-1">Location</strong>
                        <span class="block">
                            {{ $user->address }}
                        </span>
                    </li>
                    @if ($user->linkporto != '')
                        <li class="px-2 mt-1"><strong class="mr-1">Portfolio</strong>
                            <span class="block">
                                {{ $user->linkporto }}
                            </span>
                        </li>
                    @endif
                </ul>


                <!-- skills -->
                <strong class="text-xl font-medium">Skills</strong>
                <ul class="mt-2 mb-10">
                    @foreach ($skills as $data)
                        <li class="px-2 mt-1">{{ $data->name }}</li>
                    @endforeach
                </ul>
                <strong class="text-xl font-medium">Interests & Hobbies</strong>
                <ul class="mt-2">
                    @foreach ($interests as $data)
                        <li class="px-2 mt-1">{{ $data->interest }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- kanan -->
            <div class="w-4/6">
                <!-- about me -->
                <section>
                    <h2 class="text-2xl pb-1 border-b font-semibold">About</h2>
                    <p class="mt-4 text-xs">{{ $user->description }}</p>
                </section>
                <!-- projects -->
                <section>
                    <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Projects</h2>
                    <ul class="mt-1">
                        @foreach ($projects as $data)
                            <li class="py-2">
                                <div class="flex justify-between my-1">
                                    <strong>{{ $data->name }}</strong>
                                </div>
                                <p class="text-sm">Link to this project : {{ $data->link }}</p>
                                <p class="text-xs mt-2">{{ $data->description }}</p>
                            </li>
                        @endforeach
                    </ul>
                </section>
                <!-- work experiences -->
                <section>
                    <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Work Experiences</h2>
                    @foreach ($experineces as $data)
                    @endforeach
                    <ul class="mt-2">
                        <li class="pt-2">
                            <p class="flex justify-between text-sm"><strong
                                    class="text-base">{{ $data->company }}</strong>{{ $data->duration }}</p>
                            <p class="flex justify-between text-base">{{ $data->field }}</p>
                            {{-- <p class="text-justify text-xs">
                                deskripsi nanti
                            </p> --}}
                        </li>
                    </ul>
                </section>
                <!-- education -->
                <section>
                    <h2 class="text-2xl mt-6 pb-1 border-b font-semibold">Education</h2>
                    <ul class="mt-2">
                        @foreach ($educations as $data)
                            <li class="pt-2">
                                <p class="flex justify-between text-sm">
                                    <strong class="text-base">
                                        {{ $data->name }}
                                    </strong>
                                    {{ $data->graduation_year }}
                                </p>
                                <p class="flex justify-between text-sm">
                                    {{ $data->field_of_study }}<small>{{ $data->degree }}</small></p>
                            </li>
                        @endforeach
                    </ul>
                </section>
            </div>
        </main>
        <footer class="mt-6 text-center">
            <a class="text-blue-400 text-sm pb-2" href="/pdf/download/cv/{{ $user->id }}" download>
                Download CV
            </a>
        </footer>
    </div>
</body>

</html>
