@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ request()->fullUrlWithQuery([$paginator->getPageName() => $paginator->currentPage() - 1]) }}"
                        rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ request()->fullUrlWithQuery([$paginator->getPageName() => $paginator->currentPage() + 1]) }}"
                        rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
