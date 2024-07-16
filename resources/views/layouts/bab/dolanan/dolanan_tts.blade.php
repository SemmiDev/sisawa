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
        <section id="pitakonan" class="pitakonan flex flex-col gap-4">
            <p class="soal">
                {{ $detail['pitakonan'] }}
            </p>
            <ul>
                <li>
                    <a class="btn btn-ghost opsi-jawaban">
                        <label>a. {{ $detail['pilihan1'] }}</label>
                        <input type="radio" name="pitakon-{{ $detail['id'] }}" value="{{ $detail['pilihan1'] }}"
                            class="hidden" />
                    </a>
                </li>
                <li>
                    <a class="btn btn-ghost opsi-jawaban">
                        <label>b. {{ $detail['pilihan2'] }}</label>
                        <input type="radio" name="pitakon-{{ $detail['id'] }}" value="{{ $detail['pilihan2'] }}"
                            class="hidden" />
                    </a>
                </li>
                <li>
                    <a class="btn btn-ghost opsi-jawaban">
                        <label>c. {{ $detail['pilihan3'] }}</label>
                        <input type="radio" name="pitakon-{{ $detail['id'] }}" value="{{ $detail['pilihan3'] }}"
                            class="hidden" />
                    </a>
                </li>
                <li>
                    <a class="btn btn-ghost opsi-jawaban">
                        <label>d. {{ $detail['pilihan4'] }}</label>
                        <input type="radio" name="pitakon-{{ $detail['id'] }}" value="{{ $detail['pilihan4'] }}"
                            class="hidden" />
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <button class="mriksa btn btn-warning" data-wangsulan="{{ $detail['wangsulan'] }}">Mriksa Bebener</button>
            </div>
            <div role="alert" class="jawaban alert hidden">
                <div class="icon text-white"></div>
                <div class="pesan text-white"></div>
            </div>
        </section>

        <div class="paginasi">
            {{ isset($paginator) ? $paginator->links() : '' }}
        </div>
    @else
        <h1>Durung ana dolanan</h1>
    @endif
@endsection
