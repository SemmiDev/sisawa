@extends('layouts.app')

@section('title', 'Dashboard')

@push('head')
    @vite('resources/css/layouts/dashboard.css')
@endpush

@push('body')
    @vite('resources/js/layouts/dashboard.js')
@endpush

@section('navbar')
    @include('layouts.dashboard.navbar', ['title' => 'Dashboard'])
@endsection

@push('content')
    @include('layouts.dashboard.carousel')

    @include('layouts.dashboard.pilihanMateri')

    @include('layouts.dashboard.instansi')
@endpush
