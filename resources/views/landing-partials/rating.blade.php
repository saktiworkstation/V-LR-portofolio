<div class="container mx-auto px-40 pt-10 pb-40">
    <div class="grid-rows-4">
        <div class="grid-rows-2 content-center text-center">
            <h1 class="text-4xl font-bold mb-5 text-slate-700">
                Testimoni
            </h1>
            <p>#Apa yang pelanggan kami katakan tentang kami</p>
        </div>

        {{-- Card --}}
        <div class="grid-rows-1 flex justify-center h-auto items-center relative">
            @foreach ($ratings as $item)
                {{-- start --}}
                <div class="flex justify-center h-auto items-start pt-12 px-4">
                    <div class="w-auto max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow-2xl">
                        <div class="content-center items-center flex justify-start">
                            <img src="/img/rating/satu.png" alt=""
                                class="w-64 bg-gradient-to-br h-40 from-green-600 to-emerald-400 rounded-lg shadow ">
                        </div>
                        <div class="my-2 h-auto text-center w-64">
                            <h1 class="text-lg font-bold tracking-tight text-slate-700">
                                Ryan Newman
                            </h1>
                            <p class="font-bold text-xs text-gray-600">Data Analyst at Microsoft
                            </p>

                            <p class="font-bold text-xs text-gray-600 pt-6">"We've used Wesclic University for the last
                                2
                                years. Thanks for the great service."
                            </p>


                            <div class="space-y-1  my-2">
                                <p
                                    class="font-bold text-xs text-gray-600 items-center flex justify-center content-center">
                                    <img src="/img/rating/fstar.png" alt="" class="w-4 h-4 mt-4 mx-1">
                                    <img src="/img/rating/fstar.png" alt="" class="w-4 h-4 mt-4 mx-1">
                                    <img src="/img/rating/fstar.png" alt="" class="w-4 h-4 mt-4 mx-1">
                                    <img src="/img/rating/fstar.png" alt="" class="w-4 h-4 mt-4 mx-1">
                                    <img src="/img/rating/kstar.png" alt="" class="w-4 h-4 mt-4 mx-1">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Side button --}}
            <a href="#" rel="noopener noreferrer"
                class="absolute end-6 bottom-48 inline-flex items-center px-4 py-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 my-5">→</a>
            <a href="#" rel="noopener noreferrer"
                class="absolute start-6 bottom-48 inline-flex items-center px-4 py-4 bg-white-800 border  rounded-md font-semibold text-xs text-black tracking-widest hover:bg-white-700 my-5 shadow-md">←</a>
        </div>
    </div>
</div>
