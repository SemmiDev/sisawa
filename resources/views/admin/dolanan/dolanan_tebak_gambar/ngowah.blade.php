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
                    <select type="text" name="wangsulan" value="{{ $detail['wangsulan'] }}"
                        class="select select-bordered w-full" required>
                        <option value="gambar1">Gambar 1</option>
                        <option value="gambar2">Gambar 2</option>
                        <option value="gambar3">Gambar 3</option>
                        <option value="gambar4">Gambar 4</option>
                        <option value="gambar5">Gambar 5</option>
                        <option value="gambar6">Gambar 6</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="gambar1">Gambar 1</label>
                    <input type="file" name="gambar1" accept="image/*" value="{{ $detail['gambar1'] }}"
                        class="file-input file-input-bordered file-input-ghost" />
                </div>
                <div class="mb-5">
                    <label for="gambar2">Gambar 2</label>
                    <input type="file" name="gambar2" accept="image/*" value="{{ $detail['gambar2'] }}"
                        class="file-input file-input-bordered file-input-ghost" />
                </div>
                <div class="mb-5">
                    <label for="gambar3">Gambar 3</label>
                    <input type="file" name="gambar3" accept="image/*" value="{{ $detail['gambar3'] }}"
                        class="file-input file-input-bordered file-input-ghost" />
                </div>
                <div class="mb-5">
                    <label for="gambar4">Gambar 4</label>
                    <input type="file" name="gambar4" accept="image/*" value="{{ $detail['gambar4'] }}"
                        class="file-input file-input-bordered file-input-ghost" />
                </div>
                <div class="mb-5">
                    <label for="gambar5">Gambar 5</label>
                    <input type="file" name="gambar5" accept="image/*" value="{{ $detail['gambar5'] }}"
                        class="file-input file-input-bordered file-input-ghost" />
                </div>
                <div class="mb-5">
                    <label for="gambar6">Gambar 6</label>
                    <input type="file" name="gambar6" accept="image/*" value="{{ $detail['gambar6'] }}"
                        class="file-input file-input-bordered file-input-ghost" />
                </div>
                <div class="flex justify-center gap-4 w-full">
                    <button type="submit" class="btn btn-success text-white">Nyimpen</button>
                    <a href="{{ $sakdurunge }}" class="btn btn-error text-white">Mbatalake</a>
                </div>
            </form>
        </div>
    </div>
@endsection
