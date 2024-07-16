@extends('admin.dolanan')

@section('isi')
    <div class="p-1 flex flex-wrap gap-4 justify-center">
        @php
            $warna = ['#FFCBE4', '#FFC83A', '#A2D862', '#3876BF', '#3876BF'];
            $nDolanan = count($listDolanan);
        @endphp
        @foreach ($listDolanan as $i => $dolanan)
            @include('admin.dolanan.card', [
                'judhul' => $dolanan->dolanan->judhul,
                'gambar' => asset($dolanan->dolanan->gambar),
                'dolanan_id' => $dolanan->dolanan->dolanan_id,
                'warna' => $warna[$i % $nDolanan],
            ])
        @endforeach
    </div>
@endsection
