@php
    $alias = $bab->alias;
@endphp

@push('body')
    @vite('resources/js/layouts/bab/gamelan/jenisGamelan.js')
@endpush

<section class="w-full flex justify-between gap-4 transition-all duration-300 p-4 rounded-2xl">
    <div class="flex-1">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 justify-center">
            @forelse ($listPesen as $pesen)
                @include("layouts.bab.$alias.jenis_gamelan_card", $pesen)
            @empty
                <h1>Durung ana gamelan</h1>
            @endforelse
        </div>
    </div>
</section>
