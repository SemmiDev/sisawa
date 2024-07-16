@php
    $alias = $bab->alias;
@endphp

<main id="dolanan-tab-view" data-initial-tab="@yield('initial-tab', 0)" class="p-4 max-w-6xl mx-auto flex align-top">
    <div class="dolanan-tab-list my-5 flex flex-col gap-2">
        <div style="background-color: #88D32E;"
            class="dolanan-tab btn tab-item flex justify-center items-center rounded-l-2xl !rounded-r-none transition-all duration-300">
            <img loading="lazy" src="@yield('icon-tab-0')" class="tab-icon" />
        </div>
        <div style="background-color: #FFC83A;"
            class="dolanan-tab btn tab-item flex justify-center items-center rounded-l-2xl !rounded-r-none transition-all duration-300">
            <img loading="lazy" src="@yield('icon-tab-1')" class="tab-icon" />
        </div>
        <div style="background-color: #85D5F6;"
            class="dolanan-tab btn tab-item flex justify-center items-center rounded-l-2xl !rounded-r-none transition-all duration-300">
            <img loading="lazy" src="{{ Vite::asset('resources/images/materi/tabListItemDolanan.png') }}"
                class="tab-icon" />
        </div>
    </div>

    <section style="background-color: #faeedf;"
        class="w-full flex justify-between gap-4 transition-all duration-300 p-2 lg:p-8 rounded-2xl shadow-md">

        <div class="dolanan-tab-content p-2 flex-1">
            <div class="hidden">
                @if ($materi)
                    @yield('tab-content-0')
                @else
                    <h1>Durung ana materi</h1>
                @endif
            </div>

            <div class="hidden">
                @yield('tab-content-1')
            </div>

            <div class="hidden">
                @yield('tab-content-2')
            </div>
        </div>
    </section>
</main>

<style>
    .tab-item {
        width: 6rem;
        height: 6rem;
        padding: 1rem;
    }

    .tab-icon {
        max-width: 4rem;
    }

    @media (max-width: 768px) {
        .tab-item {
            width: 5rem;
            height: 5rem;
            padding: 0.75rem;
        }

        .tab-icon {
            max-width: 3.5rem;
        }
    }

    @media (max-width: 480px) {
        .tab-item {
            width: 4rem;
            height: 4rem;
            padding: 0.5rem;
        }

        .tab-icon {
            max-width: 3rem;
        }
    }
</style>
