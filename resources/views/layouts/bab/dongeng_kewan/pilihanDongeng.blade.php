@php
    $alias = $bab->alias;
@endphp

@push('head')
    @vite("resources/css/layouts/bab/$alias/dongeng_kewan.css")
@endpush

<section class="w-full max-w-3xl pt-4 mx-auto">
    <div class="relative">
        <div class="max-w-2xl list-dongeng swiper swiper-horizontal rounded-2xl"
            data-initialindex="{{ array_search(['judhul' => request()->get('judhul')], $listJudhul->toArray()) }}">
            <div class="swiper-wrapper !h-auto space-x-3">
                @foreach ($listJudhul as $item)
                    <a href="{{ request()->fullUrlWithQuery(['judhul' => $item->judhul]) }}"
                        class="swiper-slide btn !w-auto {{ $item->judhul == request()->get('judhul') ? 'btn-error' : '' }}"
                        role="group" style="padding: 15px; {{ $item->judhul == request()->get('judhul') ? 'background-color: #db7979;' : '' }}">
                        {{ $item->judhul }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

@push('head')
    @vite("resources/js/layouts/bab/$alias/pilihanDongeng.js")
@endpush
