<div class="card  bg-base-100 shadow-xl transition-all duration-400 transform hover:scale-105">
    <figure class="w-full h-48 flex items-center justify-center overflow-hidden">
        <img class="w-full h-full object-cover" loading="lazy" src="{{ url('storage/' . $gambar1) }}"
            alt="{{ $judhul }}" />
    </figure>
    <div class="card-body items-center">
        <button class="btn play-btn lg:btn-sm btn-md relative overflow-hidden"
            data-audio="{{ url('storage/' . $swara) }}">
            <h3 class="text-sm lg:text-lg card-title">
                {{ $judhul }}
                <div class="icon">
                    <i data-lucide="volume-2" class="play"></i>
                    <i data-lucide="pause" class="pause hidden"></i>
                </div>
            </h3>
            <div class="track absolute left-0 bottom-0 w-0 h-1 rounded-3xl bg-slate-400">
            </div>
        </button>
        <h5>{{ $katrangan }}</h5>
    </div>
</div>
