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
                    <label for="judhul">Irah-Irahan</label>
                    <input type="text" name="judhul" value="{{ old('judhul') }}" required>
                </div>
                <div class="mb-5">
                    <label for="gambar1">Gambar 1</label>
                    <input type="file" name="gambar1" accept="image/*" value="{{ old('gambar1') }}"
                        class="file-input file-input-bordered file-input-ghost" required>
                </div>
                <div class="mb-5">
                    <label for="gambar2">Gambar 2</label>
                    <input type="file" name="gambar2" accept="image/*" value="{{ old('gambar2') }}"
                        class="file-input file-input-bordered file-input-ghost" required>
                </div>
                <div class="mb-5">
                    <label for="cerita">Carita</label>
                    <textarea type="text" name="cerita" required>{{ old('cerita') }}</textarea>
                </div>
                <div class="mb-5">
                    <label for="katrangan">Pitakon</label>
                    <textarea type="text" name="katrangan" required>{{ old('katrangan') }}</textarea>
                </div>
                <div class="mb-5">
                    <label for="pesen">Piwulang</label>
                    <textarea type="text" name="pesen" required>{{ old('pesen') }}</textarea>
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
