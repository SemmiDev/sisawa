@php
    $sakdurunge = preg_replace('/\/detail\/\d*$/', '', url()->current());
@endphp

@extends('admin.dolanan')

@push('body')
    @vite('resources/js/admin/dolanan/tabel.js')
@endpush

@section('judul_dolanan', '- ' . $dolanan->judhul)

@section('sakdurunge', $sakdurunge)

@section('action')
    <a class="btn btn-success" href="{{ url()->current() . '/nambah' }}">Nambahi Dolanan</a>
@endsection

@section('isi')
    <div class="overflow-x-auto bg-white rounded-2xl">
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th>Wangsulan</th>
                    <th>Gambar 1</th>
                    <th>Gambar 2</th>
                    <th>Gambar 3</th>
                    <th>Gambar 4</th>
                    <th>Gambar 5</th>
                    <th>Gambar 6</th>
                    <th>Tumindak</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listDetail as $detail)
                    <tr>
                        <td>{{ $detail['wangsulan'] }}</td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['gambar1']) }}" /></td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['gambar2']) }}" /></td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['gambar3']) }}" /></td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['gambar4']) }}" /></td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['gambar5']) }}" /></td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['gambar6']) }}" /></td>
                        <td class="flex gap-2">
                            <a href="{{ url()->current() . '/ngowah/' . $detail['id'] }}"
                                class="btn btn-xs btn-warning text-white">Ngowah</a>
                            <a href="{{ url()->current() . '/hapus/' . $detail['id'] }}"
                                class="btn-hapus btn btn-xs btn-error text-white">Ngilangi</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Durung ana data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
