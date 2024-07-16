@extends('admin.materi')

@push('body')
    @vite('resources/js/admin/materi/tabel.js')
@endpush

@section('action')
    <a class="btn btn-success" href="{{ url()->current() . '/nambah' }}">Nambahi Materi</a>
@endsection

@section('isi')
    <div class="overflow-x-auto bg-white rounded-2xl">
        <table class="table text-justify">
            <thead class="text-center">
                <tr>
                    <th>Irah-Irahan</th>
                    <th>Gambar 1</th>
                    <th>Gambar 2</th>
                    <th>Carita</th>
                    <th>Pitakon</th>
                    <th>Piwulang</th>
                    <th>Tumindak</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listMateri as $materi)
                    <tr>
                        <td class="align-top">{{ $materi['judhul'] }}</td>
                        <td class="align-top"><img class="max-w-40 max-h-4max-w-40"
                                src="{{ url('storage/' . $materi['gambar1']) }}" /></td>
                        <td class="align-top"><img class="max-w-40 max-h-4max-w-40"
                                src="{{ url('storage/' . $materi['gambar2']) }}" /></td>
                        <td class="align-top">
                            <textarea class="input input-bordered h-40 text-sm">{{ $materi['cerita'] }}</textarea>
                        </td>
                        <td class="align-top">{{ $materi['katrangan'] }}</td>
                        <td class="align-top">
                            <textarea class="input input-bordered h-40 text-sm">{{ $materi['pesen'] }}</textarea>
                        </td>
                        <td class="flex justify-center items-center pt-20 pb-20 gap-2">
                            <a href="{{ url()->current() . '/ngowah/' . $materi['materi_id'] }}"
                                class="btn btn-xs btn-warning text-white">Ngowah</a>
                            <a href="{{ url()->current() . '/hapus/' . $materi['materi_id'] }}"
                                class="btn-hapus btn btn-xs btn-error text-white">Ngilangi</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Durung ana materi</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
