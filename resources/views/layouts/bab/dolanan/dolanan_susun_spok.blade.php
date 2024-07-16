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
        <div class="space-y-5 text-center">
            <p>Susunlah tembung tembung iki dadi ukara kang bener!</p>
            <div id="susun-spok" class="grid grid-cols-2 gap-5 md:grid-cols-3 sm:grid-cols-2">
                @php
                    $colors = [
                        'bg-red-300',
                        'bg-green-300',
                        'bg-blue-300',
                        'bg-cyan-300',
                        'bg-purple-300',
                        'bg-yellow-300',
                    ];
                    $nColors = count($colors);
                    $words = [
                        $detail['kata1'],
                        $detail['kata2'],
                        $detail['kata3'],
                        $detail['kata4'],
                        $detail['kata5'],
                        $detail['kata6'],
                    ];
                    App\Helpers\Helper::shuffle_assoc($words);
                @endphp
                @foreach ($words as $i => $word)
                    <div class="word {{ $colors[$i % $nColors] }} relative cursor-move p-2" data-idx="{{ $i }}">
                        <span class="word-text text-center">{{ $word }}</span>
                        <div class="result absolute top-0 right-0 bottom-0 pr-1 mt-1 flex md:text-sm lg:text-2xl"></div>
                    </div>
                @endforeach
            </div>
            <p>susunan ukara....</p>
            <button class="mriksa btn btn-success">Mriksa Bebener</button>
            <div class="paginasi">
                {{ isset($paginator) ? $paginator->links() : '' }}
            </div>
        </div>
    @else
        <h1>Durung ana dolanan</h1>
    @endif
@endsection
