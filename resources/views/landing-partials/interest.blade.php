{{-- Interest pabe --}}
{{-- card start --}}
<div class="py-12 px-40 container bg-gradient-to-t from-slate-200 text-center">
    <h4 class="text-3xl md:text-5xl dark:text-black font-bold mb-6">Interest</h4>
    <div class="row flex justify-center h-auto items-center ">
        @foreach ($interests as $item)
            {{-- card start-1 --}}
            <div class="max-w-sm p-4 items-center text-center">
                <div class="pt-5 max-w-sm">
                    <h1 class="text-2xl font-bold tracking-tight text-slate-700">
                        {{ $item->interest }}
                    </h1>
                </div>
            </div>
        @endforeach
        {{-- card end-1 --}}
    </div>
</div>
{{-- card end --}}
