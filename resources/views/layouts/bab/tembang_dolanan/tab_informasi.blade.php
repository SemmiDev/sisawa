@php
    $alias = $bab->alias;
@endphp

<section class="w-full flex flex-col justify-between gap-4 transition-all duration-300 p-2 rounded-2xl">
    <div class="p-2 flex-1">
        @include("layouts.bab.$alias.informasi_content")
    </div>
</section>
