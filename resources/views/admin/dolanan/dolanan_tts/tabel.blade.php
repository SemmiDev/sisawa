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
                    <th>Pitakonan</th>
                    <th>Wangsulan</th>
                    <th>Pilihan 1</th>
                    <th>Pilihan 2</th>
                    <th>Pilihan 3</th>
                    <th>Pilihan 4</th>
                    <th>Tumindak</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listDetail as $detail)
                    <tr>
                        <td>{{ $detail['pitakonan'] }}</td>
                        <td>{{ $detail['wangsulan'] }}</td>
                        <td>{{ $detail['pilihan1'] }}</td>
                        <td>{{ $detail['pilihan2'] }}</td>
                        <td>{{ $detail['pilihan3'] }}</td>
                        <td>{{ $detail['pilihan4'] }}</td>
                        <td class="flex justify-center items-center pt-10 pb-10 gap-2">
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
