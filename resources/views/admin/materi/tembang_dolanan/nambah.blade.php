@php
    $sakdurunge = url('admin/materi/' . $bab->alias);
@endphp

@extends('admin.materi')

@push('head')
    @vite('resources/css/admin/nambah.css')
@endpush

@section('mode', 'Nambahi')

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
                    <label for="judhul">Irah-irahan</label>
                    <input type="text" name="judhul" value="{{ old('judhul') }}" required>
                </div>
                <div class="mb-5">
                    <label for="video">Pautan Video</label>
                    <input type="text" name="video" value="{{ old('video') }}" required>
                </div>
                <div class="mb-5">
                    <label for="larik">Larik</label>
                    <input type="file" name="larik" accept="image/*" value="{{ old('larik') }}"
                        class="file-input file-input-bordered file-input-ghost">
                </div>
                <div class="mb-5">
                    <label for="pesen">Piwulang</label>
                    <textarea type="text" name="pesen" value="{{ old('pesen') }}" required></textarea>
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
