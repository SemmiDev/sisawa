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
                    <th>Pitakon 1</th>
                    <th>Wangsulan 1</th>
                    <th>Pitakon 2</th>
                    <th>Wangsulan 2</th>
                    <th>Pitakon 3</th>
                    <th>Wangsulan 3</th>
                    <th>Pitakon 4</th>
                    <th>Wangsulan 4</th>
                    <th>Tumindak</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listDetail as $detail)
                    <tr>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['pitakon1']) }}" /></td>
                        <td>{{ $detail['wangsulan1'] }}</td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['pitakon2']) }}" /></td>
                        <td>{{ $detail['wangsulan2'] }}</td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['pitakon3']) }}" /></td>
                        <td>{{ $detail['wangsulan3'] }}</td>
                        <td><img class="max-w-40 max-h-40" src="{{ url('storage/' . $detail['pitakon4']) }}" /></td>
                        <td>{{ $detail['wangsulan4'] }}</td>
                        <td class="flex justify-center items-center pt-20 pb-20 gap-2">
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
