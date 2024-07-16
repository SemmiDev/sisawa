@php
    $width = 398;
    $height = 224;
@endphp

<section class="grid gap-6 p-1 md:grid-cols-2">
    <div class="w-full">
        <h1 class="font-bold text-base md:text-lg mb-1">Irah-Irahan: {{ $materi['judhul'] }}</h1>
        @if (str_contains($materi['video'], 'youtube.com') || str_contains($materi['video'], 'youtu.be'))
            <div id="ytplayer" class="rounded-2xl w-full aspect-video" data-url="{{ $materi['video'] }}"></div>
            @include('layouts.bab.youtube_iframe_js')
        @else
            <video class="rounded-2xl w-full h-auto aspect-video" controls>
                <source loading="lazy" src="{{ $materi['video'] }}" type="video/mp4" />
                <p>
                    Your browser doesn't support HTML video.
                    Here is a <a href="{{ $materi['video'] }}">link to the video</a> instead.
                </p>
            </video>
        @endif
    </div>
    <div class="w-full font-bold">
        <h1 class="text-base md:text-lg mb-1">Larik:</h1>
        <img loading="lazy" class="rounded-2xl w-full h-auto" src="{{ url('storage/' . $materi['larik']) }}">
    </div>
</section>

<style>
    #ytplayer,
    video {
        width: 100%;
        height: auto;
    }
</style>
