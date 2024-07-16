@php
    $sakdurunge = str_replace('/nambah', '', url()->current());
@endphp

@extends('admin.dolanan')

@push('head')
    @vite('resources/css/admin/nambah.css')
@endpush

@section('mode', 'Nambahi')

@section('judul_dolanan', '- ' . $dolanan->judhul)

@section('sakdurunge', $sakdurunge)

@section('isi')
    <div class="rounded-2xl" style="background-color: #FFE4C4">
        <div class="px-8 py-8">
            <form method="POST" enctype="multipart/form-data">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-warning mb-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-5">
                    <label for="pitakonan">Pitakonan</label>
                    <input type="text" name="pitakonan" value="{{ old('pitakonan') }}" required />
                </div>
                <div class="mb-5">
                    <label for="wangsulan">Wangsulan</label>
                    <input type="text" name="wangsulan" value="{{ old('wangsulan') }}" required />
                </div>
                <div class="mb-5">
                    <label for="pilihan1">Pilihan 1</label>
                    <input type="text" name="pilihan1" value="{{ old('pilihan1') }}" required />
                </div>
                <div class="mb-5">
                    <label for="pilihan2">Pilihan 2</label>
                    <input type="text" name="pilihan2" value="{{ old('pilihan2') }}" required />
                </div>
                <div class="mb-5">
                    <label for="pilihan3">Pilihan 3</label>
                    <input type="text" name="pilihan3" value="{{ old('pilihan3') }}" required />
                </div>
                <div class="mb-5">
                    <label for="pilihan4">Pilihan 4</label>
                    <input type="text" name="pilihan4" value="{{ old('pilihan4') }}" required />
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
