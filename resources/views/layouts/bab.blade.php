@php
    $alias = $bab->alias;
@endphp

@extends('layouts.app')

@section('title', 'Bab ' . $bab->judhul)

@push('head')
    @vite("resources/css/layouts/bab.css")
    @vite("resources/css/layouts/bab/$alias.css")
@endpush

@push('body')
        @vite("resources/js/layouts/bab/$alias/jenisGamelan.js")
@endpush

@push('content')
    @include('layouts.bab.pencarian')
    @include('layouts.bab.tabList')
@endpush

@push('body')
    @vite('resources/js/layouts/bab/tabList.js')
@endpush
