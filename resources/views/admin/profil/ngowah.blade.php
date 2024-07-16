@php
    $sakdurunge = url('admin/profil');
@endphp

@extends('admin.profil')

@push('head')
    @vite('resources/css/admin/nambah.css')
@endpush

@section('mode', 'Ngowahi')

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
                    <label for="name">Jeneng</label>
                    <input type="text" name="name" value="{{ $guru->name }}">
                </div>
                <div class="mb-5">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" value="{{ $guru->nip }}">
                </div>
                <div class="mb-5">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" name="alamat">{{ $guru->alamat }}</textarea>
                </div>
                <div class="mb-5">
                    <label for="tempat_lahir">Panggon Lair</label>
                    <input type="text" name="tempat_lahir" value="{{ $guru->tempat_lahir }}" />
                </div>
                <div class="mb-5">
                    <label for="tgl_lahir">Dinten Lair</label>
                    <input type="date" name="tgl_lahir" value="{{ $guru->tgl_lahir }}" />
                </div>
                <div class="mb-5">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $guru->email }}">
                </div>
                <div class="mb-5">
                    <label for="no_telp">Nomer Telpon</label>
                    <input type="number" name="no_telp" value="{{ $guru->no_telp }}">
                </div>
                <div class="mb-5">
                    <label for="jenis_kelamin">Jender (L/W)</label>
                    <input type="text" name="jenis_kelamin" value="{{ $guru->jenis_kelamin }}">
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
