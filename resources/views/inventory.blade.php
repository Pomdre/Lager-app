<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-xl text-blue-900"><b>Lagrene dine:</b></h1>
                <div class="flex overflow-x-auto w-full space-x-4">
                    <div class="w-44 flex-shrink-0 shadow-xl p-0.5 bg-gradient-to-tr from-white to-sky-500"><div class="bg-white p-3"><span class="material-icons float-right" style="color: red">favorite</span><b>Supert dupert lager</b><p>Et sted i norge</p></div></div>
                    <div class="w-44 flex-shrink-0 shadow-xl"><div class="bg-white p-3"><span class="material-icons float-right">favorite_border</span><b>Det andre lageret</b><p>Et sted i norge</p></div></div>
                    <div class="w-44 flex-shrink-0 shadow-xl"><div class="bg-white p-3"><span class="material-icons float-right">favorite_border</span><b>Det andre lageret</b><p>Et sted i norge</p></div></div>
                    <div class="w-44 flex-shrink-0 shadow-xl"><div class="bg-white p-3"><span class="material-icons float-right">favorite_border</span><b>Det andre lageret</b><p>Et sted i norge</p></div></div>
                    <div class="w-44 flex-shrink-0 shadow-xl"><div class="bg-white p-3"><span class="material-icons float-right">favorite_border</span><b>Det andre lageret</b><p>Et sted i norge</p></div></div>
                    <div class="w-44 flex-shrink-0 shadow-xl"><div class="bg-white p-3"><span class="material-icons float-right">favorite_border</span><b>Det andre lageret</b><p>Et sted i norge</p></div></div>
                </div>
                <div class="py-4">
                    <h1 class="text-xl text-blue-900"><b>Gjenstander for:</b></h1>
                    <h1 class="text-lg text-sky-500">Supert dupert lager</h1>
                    <div class="p-2 bg-white shadow-xl overflow-hidden max-w-2xl mt-5">
                        <div class="flex">
                            <div class="shrink-0">
                                <img class="h-28 w-28 object-cover md:h-28 md:w-28" src="https://images.pexels.com/photos/2762247/pexels-photo-2762247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dette er en stol">
                            </div>
                            <div class="p-2 relative">
                                <div class="uppercase w-28 text-lg text-sky-500 font-semibold">Dette er en stol</div>
                                <p class="text-md absolute bottom-0 left-2">9 av 10 på lager</p>
                            </div>
                            <div class="p-2 relative w-full">
                                <button class="absolute bottom-0 right-14 w-12 mr-5 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Ut</button>
                                <button class="absolute bottom-0 right-2 w-12 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Inn</button>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 bg-white shadow-xl overflow-hidden max-w-2xl mt-5">
                        <div class="flex">
                            <div class="shrink-0">
                                <img class="h-28 w-28 object-cover md:h-28 md:w-28" src="https://images.pexels.com/photos/9637571/pexels-photo-9637571.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dette er en stol">
                            </div>
                            <div class="p-2 relative">
                                <div class="uppercase w-28 text-lg text-sky-500 font-semibold">Dette er en stol</div>
                                <p class="text-md absolute bottom-0 left-2">9 av 10 på lager</p>
                            </div>
                            <div class="p-2 relative w-full">
                                <button class="absolute bottom-0 right-14 w-12 mr-5 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Ut</button>
                                <button class="absolute bottom-0 right-2 w-12 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Inn</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</x-app-layout>
