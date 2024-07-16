<section class="min-h-screen w-100 p-5 pt-20 flex flex-col items-center justify-center">
    <h1 class="font-bold leading-tight text-3xl mb-10">MATERI SINAU</h1>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        @php
            $warna = ['#FFCBE4', '#FFC83A', '#A2D862', '#3876BF', '#3876BF'];
            $nBabagan = count($bab);
        @endphp
        @foreach ($bab as $i => $babagan)
            @include('layouts.dashboard.materiCard', [
                'card' => [
                    'image' => $babagan->gambar,
                    'title' => $babagan->judhul,
                    'color' => $warna[$i % $nBabagan],
                    'link' => url('bab/' . $babagan->alias),
                    'link-edit-materi' => url('admin/materi/' . $babagan->alias),
                    'link-edit-dolanan' => url('admin/dolanan/' . $babagan->alias),
                ],
            ])
        @endforeach
    </div>
</section>
