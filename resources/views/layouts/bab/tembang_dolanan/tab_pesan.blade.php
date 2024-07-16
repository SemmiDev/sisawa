@php
    $alias = $bab->alias;
@endphp

<section class="w-full flex justify-between gap-4 transition-all duration-300 p-4 rounded-2xl">
    <div class="p-4 flex-1">
        @if ($pesen)
            <div class="text-justify">
                <h1 class="font-bold">Piwulang</h1>
                {{ $pesen }}
            </div>
        @else
            <h1>Durung ana tembang materi</h1>
        @endif
    </div>
</section>
