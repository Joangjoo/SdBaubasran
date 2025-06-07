@if ($paginator->onFirstPage())
    <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-red-600 bg-white border border-gray-300 cursor-not-allowed rounded-l-md">
        {!! __('pagination.previous') !!}
    </span>
@else
    <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-green-600 bg-white border border-gray-300 hover:text-green-500 rounded-l-md">
        {!! __('pagination.previous') !!}
    </a>
@endif

@if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-green-600 bg-white border border-gray-300 hover:text-green-500 rounded-r-md">
        {!! __('pagination.next') !!}
    </a>
@else
    <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-red-600 bg-white border border-gray-300 cursor-not-allowed rounded-r-md">
        {!! __('pagination.next') !!}
    </span>
@endif
