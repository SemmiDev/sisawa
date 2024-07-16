<a href="{{ url('admin/dolanan/' . $bab->alias . "/detail/$dolanan_id") }}"
    class="card w-52 bg-base-100 shadow-xl transition-all duration-400 transform hover:scale-105"
    style="background-color: {{ $warna }}">
    <figure class="max-w-52 max-h-52">
        <img loading="lazy" src="{{ $gambar }}" alt="{{ $judhul }}" />
    </figure>
    <div class="card-body items-center">
        <h2 class="card-title text-center">{{ $judhul }}</h2>
        <button class="btn btn-secondary">Mbukak</button>
    </div>
</a>
