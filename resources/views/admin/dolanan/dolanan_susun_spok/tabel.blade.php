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
                    <th>Tembung 1</th>
                    <th>Tembung 2</th>
                    <th>Tembung 3</th>
                    <th>Tembung 4</th>
                    <th>Tembung 5</th>
                    <th>Tembung 6</th>
                    <th>Tumindak</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listDetail as $detail)
                    <tr>
                        <td>{{ $detail['kata1'] }} </td>
                        <td>{{ $detail['kata2'] }} </td>
                        <td>{{ $detail['kata3'] }} </td>
                        <td>{{ $detail['kata4'] }} </td>
                        <td>{{ $detail['kata5'] }} </td>
                        <td>{{ $detail['kata6'] }} </td>
                        <td class="flex gap-2">
                            <a href="{{ url()->current() . '/ngowah/' . $detail['id'] }}"
                                class="btn btn-xs btn-warning text-white">Ngowah</a>
                            <a href="{{ url()->current() . '/hapus/' . $detail['id'] }}"
                                class="btn-hapus btn btn-xs btn-error text-white">Ngilangi</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Durung ana dolanan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
