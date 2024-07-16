@php
    $alias = $bab->alias;
    $namaDolanan = $dolanan->detail;
    $sakdurunge = preg_replace('/\/dolanan\/\d*$/', '', url()->current());
@endphp

@extends("layouts.bab.$alias")

@section('sakdurunge', $sakdurunge)

@section('initial-tab', 2)

@push('head')
    @vite('resources/css/layouts/bab/tembang_dolanan.css')
@endpush

@push('body')
    @vite("resources/js/layouts/bab/dolanan/$namaDolanan.js")
@endpush

@section('tab-content-2')
    @if ($detail)
        <div class="tab-view flex justify-between items-center">
            <button class="tab-prev-nav btn btn-circle btn-ghost"></button>
            <div>
                <section class="flex-1 tab-content-petunjuk transition-opacity">
                    <h1 class="font-bold pb-3">Aturan saka dolanan iki !!</h1>
                    <ol class="list-decimal text-justify">
                        <li>Guru mencet tombol "acak angka".</li>
                        <li>Nalika angka kasebut katon, siswa nglumpuk miturut angka sing wis ana.</li>
                        <li>Siswa kang gagal ngelompokake miturut angka bakal mimpin kango nembangake tembang dolanan
                            bebarengan miturut tembang dolanan sing wis ana utawa mangsuli pitakon saka guru.</li>
                        <li>Guru miwiti muter lagu kanthi mencet tombol "wiwitan" ing swara.</li>
                    </ol>
                    <br>
                    <p>----SLAMET DOLANAN----</p>
                </section>
                <section id="nyanyi-lan-joged"
                    class="tab-content flex-1 flex flex-col items-center gap-8 transition-opacity">
                    <h1>Puter tembang dolanan ing ngisor iki!!</h1>
                    <audio class="w-full" controls>
                        <source loading="lazy" src="{{ url('storage/' . $detail['swara']) }}" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                    <div class="nomer p-3 flex justify-center items-center text-7xl bg-yellow-400 rounded-2xl">
                        <p class="text-base">Angka</p>
                    </div>
                    <button class="acak-nomer btn btn-success">Acak Angka</button>
                </section>
            </div>
            <button class="tab-next-nav btn btn-circle btn-ghost"><i data-lucide="chevron-right"></i></button>
        </div>

        <div class="paginasi">
            {{ isset($paginator) ? $paginator->links() : '' }}
        </div>
    @else
        <h1>Durung ana dolanan</h1>
    @endif
@endsection

@push('head')
    <style>
        .nomer {
            width: 100px; /* Default size */
            height: 100px; /* Default size */
        }

        @media (min-width: 768px) {
            .nomer {
                width: 200px; /* Larger size for larger screens */
                height: 200px; /* Larger size for larger screens */
            }
        }
    </style>
@endpush

@push('body')
    <script type="module">
        const $wrapper = $(".tab-view");
        const $prevBtn = $wrapper.find('.tab-prev-nav');
        const $nextBtn = $wrapper.find('.tab-next-nav');
        const $petunjuk = $wrapper.find('.tab-content-petunjuk');
        const $dolanan = $wrapper.find('#nyanyi-lan-joged');
        let $active = null;

        $prevBtn.on('click', function() {
            $petunjuk.show();
            $dolanan.hide();
            // $prevBtn.hide();
            // $nextBtn.show();
        }).trigger('click');

        $wrapper.find('.tab-next-nav').on('click', function() {
            $petunjuk.hide();
            $dolanan.show();
            // $prevBtn.show();
            // $nextBtn.hide();
        })
    </script>
@endpush
