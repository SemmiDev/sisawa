@php
    $alias = $bab->alias;
@endphp

@extends('layouts.bab')

@section('sakdurunge', url('/'))

@section('tab-content-0')
    @include("layouts.bab.$alias.tab_pesan")
@endsection

@section('tab-content-1')

    @include("layouts.bab.$alias.tab_informasi")
@endsection

@section('tab-content-2')
    @include("layouts.bab.$alias.tab_dolanan")
@endsection

@section('icon-tab-1', Vite::asset("resources/images/materi/tabListItemInfo.png"))
@section('icon-tab-0', Vite::asset("public/images/bab/gamelan.png"))