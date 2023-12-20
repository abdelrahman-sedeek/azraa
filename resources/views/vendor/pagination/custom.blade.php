

@if ($paginator->onFirstPage())
<h4 class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
    <span aria-hidden="true">السابق</span>
</h4>
@else
<h4>
    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">السابق</a>
</h4>
@endif

{{-- Pagination Elements --}}
@foreach ($elements as $element)
{{-- "Three Dots" Separator --}}
@if (is_string($element))
    <h4 class="disabled" aria-disabled="true"><span>{{ $element }}</span></h4>
@endif

{{-- Array Of Links --}}
@if (is_array($element))
    @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
            <h4 class="active" aria-current="page"><span>{{ $page }}</span></h4>
        @else
            <h4><a href="{{ $url }}">{{ $page }}</a></h4>
        @endif
    @endforeach
@endif
@endforeach

@if ($paginator->hasMorePages())
    <h4><a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">التالي</a></h4>
@else
<h4 class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')"><a href="">التالي</a></h4>
@endif

 