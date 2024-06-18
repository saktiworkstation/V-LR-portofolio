<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        testing tampilin data
    </h1>

    <h2 class="mb-2 text-lg font-semibold text-gray-900">Skills Data </h2>
    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside">
        @foreach ($skills as $data)
            <li>
                {{ $data->name }}
            </li>
        @endforeach
    </ul>

    <h2 class="mb-2 text-lg font-semibold text-gray-900">Project Data</h2>
    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside">
        @foreach ($projects as $data)
            <li>
                {{ $data->name }}
            </li>
        @endforeach
    </ul>

    {{-- Flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
