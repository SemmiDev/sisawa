@php
    $alias = $bab->alias;
    $namaDolanan = $dolanan->detail;
    $sakdurunge = preg_replace('/\/dolanan\/\d*$/', '', url()->current());
@endphp

@extends("layouts.bab.$alias")

@section('sakdurunge', $sakdurunge)

@section('initial-tab', 2)

@push('head')
    <style>
        .tebak-gambar-card {
            width: 80px;
            height: 80px;
        }

        .pertanyaan-gambar {
            width: 80px;
            height: 80px;
        }

        @media (min-width: 1024px) {
            .tebak-gambar-card {
                width: 210px;
                height: 210px;
            }

            .pertanyaan-gambar {
                width: 210px;
                height: 210px;
            }
        }
    </style>
@endpush

@push('body')
    @vite("resources/js/layouts/bab/dolanan/$namaDolanan.js")
@endpush

@section('tab-content-2')
    @if ($detail)
        <section class="w-full">
            @php
                $listGambar = [
                    $detail['gambar1'],
                    $detail['gambar2'],
                    $detail['gambar3'],
                    $detail['gambar4'],
                    $detail['gambar5'],
                    $detail['gambar6'],
                ];
                App\Helpers\Helper::shuffle_assoc($listGambar);
            @endphp

            <p class="mb-5 text-center petunjuk">Elinga gambar gamelan ing ngisor iki!!</p>
            <p class="hidden mb-5 text-center pertanyaan">Gambar nomer pira kang nuduhake gambar kang padha?</p>

            <div class="flex justify-center">
                <div class="pertanyaan-gambar py-4 transition-all duration-[2s] max-h-0 max-w-0 opacity-0"
                    data-wangsulan="{{ $detail['wangsulan'] }}">
                    @include("layouts.bab.dolanan.$namaDolanan" . '_card', [
                        'gambar' => $detail[$detail['wangsulan']],
                        'index' => '?',
                    ])
                </div>
                <div class="grid grid-cols-2 gap-2 p-1 grid-soal lg:p-3 lg:grid-cols-3">
                    @foreach ($listGambar as $index => $gambar)
                        @include("layouts.bab.dolanan.$namaDolanan" . '_card', [
                            'gambar' => $gambar,
                            'index' => $index + 1,
                        ])
                    @endforeach
                </div>
            </div>

            <div class="text-center" style="margin-top: 10px">
                <button class="mulai btn btn-info">Wiwit</button>
                <button class="hidden mriksa btn btn-success">Mriksa Bebener</button>
            </div>
        </section>

        <div class="paginasi">
            {{ isset($paginator) ? $paginator->links() : '' }}
        </div>
    @else
        <h1>Durung ana dolanan</h1>
    @endif
@endsection
