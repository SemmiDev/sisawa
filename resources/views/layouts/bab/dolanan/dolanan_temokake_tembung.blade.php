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
        <div class="flex flex-col lg:flex-row">
            <section class="" id="ws-area"></section>
            <div class="w-full">
                <p style="padding-left: 10px">Hubungna aksara aksara iki ben mbentuk siji tembung kang ana ing ngisor iki !</p>
                <ul class="ws-words">
                    @if ($detail['kata1'])
                        <li>{{ $detail['kata1'] }}</li>
                    @endif
                    @if ($detail['kata2'])
                        <li>{{ $detail['kata2'] }}</li>
                    @endif
                    @if ($detail['kata3'])
                        <li>{{ $detail['kata3'] }}</li>
                    @endif
                    @if ($detail['kata4'])
                        <li>{{ $detail['kata4'] }}</li>
                    @endif
                    @if ($detail['kata5'])
                        <li>{{ $detail['kata5'] }}</li>
                    @endif
                    @if ($detail['kata6'])
                        <li>{{ $detail['kata6'] }}</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="paginasi">
            {{ isset($paginator) ? $paginator->links() : '' }}
        </div>
    @else
        <h1>Durung ana dolanan</h1>
    @endif
@endsection
