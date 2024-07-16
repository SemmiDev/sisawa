@push('body')
    @vite('resources/js/admin/logout.js')
@endpush

<header class="app-nav w-full z-20">
    <nav class="max-w-7xl mx-auto py-1 px-14 flex items-center justify-between">
        <div class="flex items-center">
            <a href="/">
                <img class="w-12 transition-all duration-400" loading="lazy"
                    src="{{ Vite::asset('resources/images/logo_sisawa.png') }}" alt="Logo Si-Sawa" />
            </a>
            <h1 class="text-2xl font-bold">{{ @$title }}</h1>
        </div>

        @auth
            <div class="dropdown dropdown-end dropdown-hover">
                <div tabindex="0" role="button" class="btn btn-ghost m-1"><i data-lucide="circle-user"></i></div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li class="flex items-center"><a class="btn btn-ghost btn-sm font-normal" href="{{ url('admin/profil') }}">Data Pribadhi</a></li>
                    <li class="flex items-center">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-logout btn btn-ghost btn-sm font-normal">Metu</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </nav>
</header>
