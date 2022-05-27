
@php
    $pageCount = 2;
@endphp

@if ($paginator->hasPages())
    <!-- Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @php
                        $dotleft = false;
                        $dotright = false;
                    @endphp
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        
                        <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                        @elseif ($page <= $pageCount || (abs($paginator->currentPage() - $page) <= $pageCount && $paginator->currentPage() != 1 && $paginator->currentPage() != $paginator->lastPage()) || $page > $paginator->lastPage() - $pageCount)
                        
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                        @elseif ($page > $pageCount && $page < $paginator->currentPage() && $dotleft == false)
                            @php
                                $dotleft = true
                            @endphp

                        <li class="page-item"><a class="page-link" href="#">...</a></li>


                        @elseif ($page <= $paginator->lastPage() - $pageCount && $page > $paginator->currentPage() && $dotright == false)
                            @php
                                $dotright = true
                            @endphp

                       <li class="page-item"><a class="page-link" href="#">...</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>

            @else
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            @endif

        </ul>
    </nav>
@endif
  