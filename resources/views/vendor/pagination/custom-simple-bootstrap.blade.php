@if ($paginator->hasPages())
<nav>
  <div class="float-left">
    {{ __('Showing') }} <b>{{ $paginator->firstItem() }}</b> {{ __('to') }} <b>{{ $paginator->lastItem() }}</b> {{
    __('of') }} <b>{{ $paginator->total() }}</b> {{ __('entries') }}
  </div>
  <ul class="pagination float-right">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="page-item disabled" aria-disabled="true">
      <span class="page-link">@lang('pagination.previous')</span>
    </li>
    @else
    <li class="page-item">
      <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
    </li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="page-item">
      <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
    </li>
    @else
    <li class="page-item disabled" aria-disabled="true">
      <span class="page-link">@lang('pagination.next')</span>
    </li>
    @endif
  </ul>
</nav>
@endif
