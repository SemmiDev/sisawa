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
                    <label for="pitakon1">Pitakon 1</label>
                    <input type="file" name="pitakon1" accept="image/*" value="{{ old('pitakon1') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="mb-5">
                    <label for="wangsulan1">Wangsulan 1</label>
                    <input type="file" name="wangsulan1" accept="image/*" value="{{ old('wangsulan1') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="mb-5">
                    <label for="pitakon2">Pitakon 2</label>
                    <input type="file" name="pitakon2" accept="image/*" value="{{ old('pitakon2') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="mb-5">
                    <label for="wangsulan2">Wangsulan 2</label>
                    <input type="file" name="wangsulan2" accept="image/*" value="{{ old('wangsulan2') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="mb-5">
                    <label for="pitakon3">Pitakon 3</label>
                    <input type="file" name="pitakon3" accept="image/*" value="{{ old('pitakon3') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="mb-5">
                    <label for="wangsulan3">Wangsulan 3</label>
                    <input type="file" name="wangsulan3" accept="image/*" value="{{ old('wangsulan3') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="mb-5">
                    <label for="pitakon4">Pitakon 4</label>
                    <input type="file" name="pitakon4" accept="image/*" value="{{ old('pitakon4') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="mb-5">
                    <label for="wangsulan4">Wangsulan 4</label>
                    <input type="file" name="wangsulan4" accept="image/*" value="{{ old('wangsulan4') }}"
                        class="file-input file-input-bordered file-input-ghost" required />
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
