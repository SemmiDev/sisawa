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
            <svg width="1000" height="1000" xmlns="http://www.w3.org/2000/svg" class="dolanan-nyocokake mx-auto">
                @php
                    $left = [
                        0 => url('storage/' . $detail['pitakon1']),
                        1 => url('storage/' . $detail['pitakon2']),
                        2 => url('storage/' . $detail['pitakon3']),
                        3 => url('storage/' . $detail['pitakon4']),
                    ];
                    $right = [
                        0 => url('storage/' . $detail['wangsulan1']),
                        1 => url('storage/' . $detail['wangsulan2']),
                        2 => url('storage/' . $detail['wangsulan3']),
                        3 => url('storage/' . $detail['wangsulan4']),
                    ];
                    App\Helpers\Helper::shuffle_assoc($left);
                    App\Helpers\Helper::shuffle_assoc($right);
                @endphp
                @foreach ($left as $i => $img)
                    <image class="left" idx="{{ $i }}" href="{{ $img }}" 
                        preserveAspectRatio="none" />
                @endforeach

                @foreach ($right as $i => $img)
                    <image class="right" idx="{{ $i }}" href="{{ $img }}" 
                        preserveAspectRatio="none" />
                @endforeach
            </svg>
            <button class="mriksa btn btn-success mt-5 ">Mriksa bebener</button>
        </section>

        <div class="paginasi">
            {{ isset($paginator) ? $paginator->links() : '' }}
        </div>
    @else
        <h1>Durung ana dolanan</h1>
    @endif
@endsection
