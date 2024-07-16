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
            <form method="POST">
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
                    <label for="kata1">Tembung 1</label>
                    <input type="text" name="kata1" value="{{ old('kata1') }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata2">Tembung 2</label>
                    <input type="text" name="kata2" value="{{ old('kata2') }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata3">Tembung 3</label>
                    <input type="text" name="kata3" value="{{ old('kata3') }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata4">Tembung 4</label>
                    <input type="text" name="kata4" value="{{ old('kata4') }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata5">Tembung 5</label>
                    <input type="text" name="kata5" value="{{ old('kata5') }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata6">Tembung 6</label>
                    <input type="text" name="kata6" value="{{ old('kata6') }}" required />
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
