<x-header />
<div>

    <!-- carousel start -->

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[450px] overflow-hidden">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out     object-center" data-carousel-item>
                <img src="{{asset('images\sliderImages\s1.jpg')}}"
                    class="absolute block w-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('images\sliderImages\sl-2.jpg')}}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('images\sliderImages\s3.jpg')}}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- carousel end -->

    <!-- card start -->


    <div class="flex flex-row justify-center gap-10 my-10 ">


        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="relative">
                <img class="w-72" src="{{asset('images\corporate-1.jpg')}}" alt="...">
                <div class="absolute top-0 left-5    right-0 bottom-0 flex items-center justify-center">
                    <div class="text-[#62b726]">
                        <div class="font-bold text-xl mb-2">CORPORATE</div>
                        <p class="text-white text-base">
                            Corporate Drifit Plain Polo Red Casual T Shirt Corporate Drifit Plain Polo Orange Casual T
                            [...]
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="relative">
                <img class="w-72" src="{{asset('images\casual.jpg')}}" alt="...">
                <div class="absolute top-0 left-5 right-0 bottom-0 flex items-center justify-center">
                    <div class=" text-[#62b726]">
                        <div class="font-bold text-xl mb-2">CASUALS</div>
                        <p class="text-white  text-base">
                            Drifit Round Neck Red Casual T Shirt Drifit Round Neck Navy Blue Casual T Shirt [...]
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div class="relative">
                <img class="w-72" src="{{asset('images/card-bg.jpg')}}" alt="...">
                <div class="absolute -top-10 -left-6   right-0 bottom-0 flex items-center justify-center">
                    <div class="text-[#62b726]">
                        <div class="font-bold text-xl mb-2">SPORTS</div>
                        <p class="text-white text-base">
                            Customized Make to Order
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- card end -->






</div>




<x-footer />
