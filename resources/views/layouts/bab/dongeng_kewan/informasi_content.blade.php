<div class="flex flex-col gap-4">
    <div class="grid grid-cols-2 gap-4">
        <div class="flex justify-center">
            <img loading="lazy" class="w-full max-w-xs" src="{{ url('storage/' . $materi['gambar1']) }}">
        </div>
        <div class="flex justify-center">
            <img loading="lazy" class="w-full max-w-xs" src="{{ url('storage/' . $materi['gambar2']) }}">
        </div>
    </div>    
    <h2 class="text-lg font-bold text-center">{{ $materi['judhul'] }}</h2>
    <p class="text-justify">{{ $materi['cerita'] }}</p>
    <p>{{ $materi['katrangan'] }}</p>
</div>
