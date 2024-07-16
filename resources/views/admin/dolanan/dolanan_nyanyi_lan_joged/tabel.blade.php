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
                    <th>Swara</th>
                    <th>Tumindak</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listDetail as $detail)
                    <tr>
                        <td class="align-items:center">
                            @if ($detail['swara'])
                                <audio class="rounded-2xl" controls>
                                    <source loading="lazy" src="{{ url('storage/' . $detail['swara']) }}">
                                    Your browser does not support the audio element.
                                </audio>
                            @endif
                        </td>
                        <td class="flex justify-center items-center pt-7 pb-5 gap-2">
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
