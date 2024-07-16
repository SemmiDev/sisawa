@extends('admin.profil')

@push('body')
    @vite('resources/js/admin/materi/tabel.js')
@endpush

@section('isi')
    <section class="p-10 rounded-2xl" style="background-color: #FFE4C4";">
        <div class="text-center mb-10">
            <div class="avatar placeholder">
                <div class="bg-neutral text-neutral-content rounded-full w-36">
                    <span class="text-3xl">{{ strtoupper(substr($guru->name, 0, 1)) }}</span>
                </div>
            </div>
        </div>

        <div class="grid gap-10" style="grid-template-columns: auto auto 1fr">
            <div>Jeneng</div>
            <div>:</div>
            <div>{{ $guru->name }}</div>
            <div>NIP</div>
            <div>:</div>
            <div>{{ $guru->nip }}</div>
            <div>Alamat</div>
            <div>:</div>
            <div>{{ $guru->alamat }}</div>
            <div>Panggon/Dinten Lair</div>
            <div>:</div>
            <div>{{ $guru->tempat_lahir }}, {{ $guru->tgl_lahir }}</div>
            <div>Email</div>
            <div>:</div>
            <div>{{ $guru->email }}</div>
            <div>Nomer Telpon</div>
            <div>:</div>
            <div>{{ $guru->no_telp }}</div>
            <div>Jender</div>
            <div>:</div>
            <div>{{ $guru->jenis_kelamin == 'L' ? 'Lanang' : 'Wadon' }}</div>
        </div>
        <div class="text-center">
            <a href="{{ url('admin/profil/ngowah') }}" class="mt-10 btn btn-warning">Ngowah</a>
        </div>
    </section>
@endsection
