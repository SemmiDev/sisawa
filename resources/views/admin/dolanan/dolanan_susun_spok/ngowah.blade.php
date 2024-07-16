@php
    $sakdurunge = preg_replace('/\/ngowah\/\d*$/', '', url()->current());
@endphp

@extends('admin.dolanan')

@push('head')
    @vite('resources/css/admin/nambah.css')
@endpush

@section('mode', 'Ngowahi')

@section('judul_dolanan', '- ' . $dolanan->judhul)

@section('sakdurunge', $sakdurunge)

@section('isi')
    <div class="rounded-2xl" style="background-color: #FFE4C4">
        <div class="px-8 py-8">
            <form method="post">
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
                    <input type="text" name="kata1" value="{{ $detail['kata1'] }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata2">Tembung 2</label>
                    <input type="text" name="kata2" value="{{ $detail['kata2'] }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata3">Tembung 3</label>
                    <input type="text" name="kata3" value="{{ $detail['kata3'] }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata4">Tembung 4</label>
                    <input type="text" name="kata4" value="{{ $detail['kata4'] }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata5">Tembung 5</label>
                    <input type="text" name="kata5" value="{{ $detail['kata5'] }}" required />
                </div>
                <div class="mb-5">
                    <label for="kata6">Tembung 6</label>
                    <input type="text" name="kata6" value="{{ $detail['kata6'] }}" required />
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
