@push('body')
    @vite('resources/js/layouts/dashboard/carousel.js')
@endpush

<section class="relative w-full h-screen">
    <div class="swiper">
        @php
            $slides = [
                Vite::asset('resources/images/dashboard/carousel/bg_item_3.png'),
                Vite::asset('resources/images/dashboard/carousel/bg_item_1.png'),
                Vite::asset('resources/images/dashboard/carousel/bg_item_2.png'),
                Vite::asset('resources/images/dashboard/carousel/bg_item_4.png'),
            ];
        @endphp
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <img src="{{ $slide }}" loading="lazy" class="swiper-slide" />
            @endforeach
        </div>
        <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal">
            @foreach ($slides as $slide)
                <span class="swiper-pagination-bullet"></span>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div
        class="max-w-[30rem] m-12 absolute top-20 bottom-0 flex flex-col pointer-events-none z-10">
        <h1 class="hero-title mb-4 md:text-lg lg:text-5xl">
            Ayo sinau lan dolanan 
            <br>bareng karo Si-Sawa!!
        </h1>
        <p class="hero-description text-base/6 lg:text-lg">
            Si-sawa minangka media pamulangan 
            <p class="hero-description text-base/6 lg:text-lg">kang ndukung sinau lan dolanan bebarengan</p>
        </p>
    </div>
</section>
