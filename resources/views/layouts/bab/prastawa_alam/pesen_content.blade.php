@php
    $width = 398;
    $height = 224;
@endphp

<div class="flex flex-col gap-4">
    <h2 class="text-lg font-bold" style="font-size:23px;">{{ $materi['judhul'] }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @if (str_contains($materi['video'], 'youtube.com') || str_contains($materi['video'], 'youtu.be'))
            <div id="ytplayer" class="rounded-2xl bg-black w-full max-w-md md:max-w-lg "
                data-url="{{ $materi['video'] }}" style="aspect-ratio: 16 / 8.5;"></div>
            @include('layouts.bab.youtube_iframe_js')
        @else
            <video class="rounded-2xl w-full max-w-md md:max-w-lg " 
                   style="aspect-ratio: 16 / 8.5;" controls>
                <source loading="lazy" src="{{ $materi['video'] }}" type="video/mp4" />
                <p>
                    Your browser doesn't support HTML video.
                    Here is a <a href="{{ $materi['video'] }}">link to the video</a> instead.
                </p>
            </video>
        @endif
        <img class="rounded-2xl w-full max-w-md md:max-w-lg"
             loading="lazy" src="{{ url('storage/' . $materi['gambar1']) }}"
             style="aspect-ratio: 16 / 8.5;">
    </div>
    <p style="margin-top: 10px" class="text-justify">{{ $materi['pesen'] }}</p>
    <p class="text-justify"><b>Katerangan: </b>{{ $materi['katrangan'] }}</p>
    <p class="text-justify"><b>Sabab Kautama: </b>{{ $materi['penyebab'] }}</p>
</div>
