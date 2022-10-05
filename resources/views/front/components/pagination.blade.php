<nav>
    @if ($paginator->hasPages())
        <ul class="block__pagination">
            @if ($paginator->onFirstPage())
                <li class="block__pagination--item disabled"><a>«</a></li>
            @else
                <li class="block__pagination--item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a></li>
            @endif

            @if($paginator->currentPage() > 3)
                <li class="block__pagination--item hidden-xs"><a href="{{ $paginator->url(1) }}">1</a></li>
            @endif
            @if($paginator->currentPage() > 4)
                <li class="block__pagination--item"><a>...</a></li>
            @endif
            @foreach(range(1, $paginator->lastPage()) as $i)
                @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                    @if ($i == $paginator->currentPage())
                        <li class="block__pagination--item active" aria-current="page"><a>{{ $i }}</a></li>
                    @else
                        <li class="block__pagination--item"><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endif
            @endforeach
            @if($paginator->currentPage() < $paginator->lastPage() - 3)
                <li class="block__pagination--item"><a>...</a></li>
            @endif
            @if($paginator->currentPage() < $paginator->lastPage() - 2)
                <li class="hidden-xs block__pagination--item"><a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="block__pagination--item next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">次へ</a></li>
            @else
                <li class="block__pagination--item disabled"><a>»</a></li>
            @endif
        </ul>
    @endif
</nav>