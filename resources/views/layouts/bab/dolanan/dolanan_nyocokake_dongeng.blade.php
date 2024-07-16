@php
    $alias = $bab->alias;
    $namaDolanan = $dolanan->detail;
    $sakdurunge = preg_replace('/\/dolanan\/\d*$/', '', url()->current());
@endphp

@extends("layouts.bab.$alias")

@section('sakdurunge', $sakdurunge)

@section('initial-tab', 2)

@push('head')
    @vite("resources/css/layouts/bab/dolanan/$namaDolanan.css")
@endpush

@push('body')
    @vite("resources/js/layouts/bab/dolanan/$namaDolanan.js")
@endpush

@section('tab-content-2')
    @if ($detail)
        <section class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="dolanan-nyocokake mx-auto">
                @php
                    $left = [
                        url('storage/' . $detail['pitakon1']),
                        url('storage/' . $detail['pitakon2']),
                        url('storage/' . $detail['pitakon3']),
                        url('storage/' . $detail['pitakon4']),
                    ];
                    $right = [
                        $detail['wangsulan1'],
                        $detail['wangsulan2'],
                        $detail['wangsulan3'],
                        $detail['wangsulan4'],
                    ];
                    App\Helpers\Helper::shuffle_assoc($left);
                    App\Helpers\Helper::shuffle_assoc($right);
                @endphp
                @foreach ($left as $i => $img)
                    <image class="left" idx="{{ $i }}" href="{{ $img }}"
                        preserveAspectRatio="none" />
                @endforeach

                @foreach ($right as $i => $text)
                    <foreignObject class="right" idx="{{ $i }}">

                        <body xmlns="httdiv://www.w3.org/1999/xhtml">
                            <div class="h-full px-1 flex justify-center items-center text-md rounded-2xl bg-gray-300 text-xs lg:text-base">
                                {{ $text }}
                            </div>
                        </body>
                    </foreignObject>
                @endforeach
            </svg>
            <button class="mriksa btn btn-success mt-5">Mriksa bebener</button>
        </section>

        <div class="paginasi">
            {{ isset($paginator) ? $paginator->links() : '' }}
        </div>
    @else
        <h1>Durung ana dolanan</h1>
    @endif
@endsection
