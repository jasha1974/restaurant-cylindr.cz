<div>
    <!-- Hero section -->
    <section class="text-gray-400 bg-gray-900 body-font bg-fixed bg-cover" style="background-image: url({{ URL::asset('images/bg.jpg') }})">
        <div class="container flex flex-wrap px-5 py-12 mx-auto">
            <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
                <a href="#">
                    <div class="bg-white relative shadow p-2 rounded-lg text-black hover:shadow-lg">
                        <img src="{{ URL::asset('images/restaurace.jpg') }}" class="h-full rounded w-full object-cover">

                        <div class="py-4 px-2">
                            <div class="md:text-4xl font-bold text-center">RESTAURACE</div>

                            <div class="text-sm font-light text-center my-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
                <a href="#">
                    <div class="bg-white relative shadow p-2 rounded-lg text-black hover:shadow-lg">
                        <img src="{{ URL::asset('images/bowling.jpg') }}" class="h-full rounded w-full object-cover">

                        <div class="py-4 px-2">
                            <div class="md:text-4xl font-bold text-center">BOWLING</div>

                            <div class="text-sm font-light text-center my-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="md:w-1/2 lg:w-1/3 py-4 px-4">
                <a href="#">
                    <div class="bg-white relative shadow p-2 rounded-lg text-black hover:shadow-lg">
                        <img src="{{ URL::asset('images/penzion.jpg') }}" class="h-full rounded w-full object-cover">

                        <div class="py-4 px-2">
                            <div class="md:text-4xl font-bold text-center">PENZION</div>

                            <div class="text-sm font-light text-center my-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <!-- Daily menu section -->
    <section class="text-gray-600 bg-gray-300 body-font">
        <div class="container px-5 py-5 mx-auto">
            <div class="text-center mb-2">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-1">Polední menu</h1>
                {{--<p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Pro odběr denního menu se můžete zaregistrovat níže na stránce.</p>--}}

                @livewire('daily-menu-component')

            </div>
        </div>
    </section>

    <!-- Feature section -->
    <section class="text-gray-600 bg-gray-100 body-font">
        <div class="container px-6 py-12 mx-auto">
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coffee" width="50" height="50" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1"></path>
                            <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                            <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                            <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z"></path>
                            <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Restaurace</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>

                        <div class="p-4">
                            <h2 class="text-gray-900 title-font font-bold mb-3">Otevírací doba</h2>
                            <div class="flex justify-center">
                                <div class="p-1">Pondělí</div>
                                <div class="p-1">10:00 - 22:00</div>
                            </div>
                            <div class="flex justify-center">
                                <div class="p-1">Pondělí</div>
                                <div class="p-1">10:00 - 22:00</div>
                            </div>
                            <div class="flex justify-center">
                                <div class="p-1">Pondělí</div>
                                <div class="p-1">10:00 - 22:00</div>
                            </div>
                            <div class="flex justify-center">
                                <div class="p-1">Pondělí</div>
                                <div class="p-1">10:00 - 22:00</div>
                            </div>
                        </div>

                        <a class="mt-3 text-indigo-500 inline-flex items-center">Více informací
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ball-bowling" width="50" height="50" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <line x1="11" y1="9" x2="11" y2="9.01"></line>
                            <line x1="15" y1="8" x2="15" y2="8.01"></line>
                            <line x1="14" y1="12" x2="14" y2="12.01"></line>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Bowling</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bed" width="50" height="50" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 7v11m0 -4h18m0 4v-8a2 2 0 0 0 -2 -2h-8v6"></path>
                            <circle cx="7" cy="10" r="1"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Penzion</h2>
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
