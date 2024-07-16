<div href="#" class="card bg-base-100 shadow-xl transition-all duration-400 transform hover:scale-105"
    style="background-color: {{ $card['color'] }}">
    <figure>
        <img loading="lazy" src="{{ $card['image'] }}" alt="{{ $card['title'] }}" />
    </figure>
    <div class="card-body items-center">
        <h2 class="card-title">{{ $card['title'] }}</h2>
        <div class="card-actions mt-auto">
            @guest
                <a href="{{ $card['link'] }}" class="btn btn-secondary ">Mbukak</a>
            @endguest
            @auth
                <a href="{{ $card['link-edit-materi'] }}" class="btn btn-secondary">Materi</a>
                <a href="{{ $card['link-edit-dolanan'] }}" class="btn btn-accent">Dolanan</a>
            @endauth
        </div>
    </div>
</div>
