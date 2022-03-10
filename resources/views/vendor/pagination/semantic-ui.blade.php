
@if ($paginator->hasPages())
    <div class="justify-content-center gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align tourmaster-item-pdlr">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="prev page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"></a>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="page-numbers disabled" aria-disabled="true"><span>{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="page-numbers" href="{{ $url }}" aria-current="page"><span>{{ $page }}</span></a>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"></a>
        @else
            <a class="next page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.next')"></a>
        @endif
    </div>
@endif
