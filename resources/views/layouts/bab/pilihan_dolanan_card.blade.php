<a href="{{ url()->current() . "/dolanan/$dolanan_id" }}"
    class="card w-48 bg-base-100 shadow-xl transition-all duration-400 transform hover:scale-105"
    style="background-color: {{ $warna }}">
    <figure class="w-full h-48 overflow-hidden flex items-center justify-center object-fit: cover;">
        <img loading="lazy" src="{{ $gambar }}" alt="{{ $judhul }}" class="card-img" />
    </figure>
    <div class="card-body items-center">
        <h2 class="card-title text-center">{{ $judhul }}</h2>
    </div>
</a>
