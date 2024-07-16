@extends('layouts.app')

@section('title', 'Materi | Guru')

@push('head')
    @vite('resources/css/admin/materi.css')
    @vite('resources/css/admin/toastr.css')
@endpush

@section('navbar')
    @include('admin.navbar', ['title' => 'Guru'])
@endsection

@push('content')
    <div class="max-w-6xl mx-auto pb-20">
        <h1 class="text-3xl mt-5 mb-10 flex items-center gap-4">
            <a class="btn btn-ghost btn-circle" href="@yield('sakdurunge', '/')"><i data-lucide="chevron-left"></i></a>
            <span class="flex-1">@yield('mode') Materi {{ $bab->judhul }}</span>
            @yield('action')
        </h1>

        @yield('isi')
    </div>
@endpush

@push('body')
    @vite('resources/js/admin/materi.js')
    @vite('resources/js/admin/toastr.js')
    @if (Session::has('success'))
        <script>
            setTimeout(() => {
                toastr.success("Data Kasimpen Kanthi Becik");
            }, 1000);
        </script>
    @endif
    @if (Session::has('successHapus'))
        <script>
            setTimeout(() => {
                toastr.success("Data Kasil Kaapus");
            }, 1000);
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            setTimeout(() => {
                toastr.error("Data Ora Kasimpen");
            }, 1000);
        </script>
    @endif
@endpush
