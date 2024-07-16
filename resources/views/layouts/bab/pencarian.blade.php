<section class="max-w-6xl mx-auto p-8 pl-5 pb-0 flex justify-between gap-4">
    <input id="golekki" type="text" placeholder="Golekki ..." class="flex-1 input input-bordered rounded-2xl" />
    <a href="@yield('sakdurunge')" class="btn btn-error">Sadurunge</a>
</section>

@push('body')
    <script type="module">
        $('#golekki').autocomplete({
            source: <?php echo json_encode(
                $listJudhul
                    ->map(function ($item) {
                        return $item->judhul;
                    })
                    ->toArray(),
            ); ?>,
            select: function(event, ui) {
                var url = new URL(window.location.href);
                url.searchParams.set('judhul', ui.item.value);
                window.location.href = url.toString();
            }
        });
    </script>
@endpush
