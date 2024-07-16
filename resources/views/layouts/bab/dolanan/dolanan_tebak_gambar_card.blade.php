<button
    class="tebak-gambar-card relative card overflow-hidden bg-base-100 shadow-xl transition-all duration-400 transform hover:scale-105"
    style="background-color: #FFCBE4">
    <img loading="lazy" src="{{ url('storage/' . $gambar) }}" class="object-cover w-full h-full" />
    <div
        class="overlay w-full h-full absolute top-0 left-0 flex justify-center items-center bg-orange-500 text-5xl text-white transition-opacity duration-700 cursor-pointer {{ @$showOverlay ? 'opacity-1' : 'opacity-0' }}">
        {{ @$index }}
    </div>
    <input type="radio" name="tebak-gambar-input" value="{{ @$index }}" class="hidden tebak-gambar-input" />
</button>
