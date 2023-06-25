@if ($pagination->pages->count() > 1)
    <nav class="flex text-base my-8 blog-pagination">
        @if ($previous = $pagination->previous)
            <a
                href="{{ $previous }}"
                title="Previous Page"
                class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3 font-black"
            >&LeftArrow;</a>
        @endif


        <{{ $pagination->currentPage == 1 ? 'span' : 'a' }} href="{{ $pagination->pages[1]}}"
            title="Go to Page 1"
            class="rounded mr-3 px-5 py-3 {{ $pagination->currentPage == 1 ? 'text-white bg-gray-600 hover:text-white font-black' : 'text-blue-700 bg-gray-200 hover:bg-gray-400 font-medium' }}"
        >1</{{ $pagination->currentPage == 1 ? 'span' : 'a' }}>

        @if ($pagination->currentPage > 5)
            <span class="bg-gray-100 rounded mr-3 px-5 py-3 font-medium">...</span>
        @endif

        @foreach ($pagination->pages as $pageNumber => $path)
            @if ($pageNumber == 1 || $pageNumber == $pagination->totalPages)
                @continue
            @endif

            @if ($pageNumber >= $pagination->currentPage - 3 && $pageNumber <= $pagination->currentPage + 3)
                <{{ $pagination->currentPage == $pageNumber ? 'span' : 'a' }}
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-white bg-gray-600 hover:text-white font-black' : 'text-blue-700 bg-gray-200 hover:bg-gray-400 font-medium' }}"
                >{{ $pageNumber }}</{{ $pagination->currentPage == $pageNumber ? 'span' : 'a' }}>
            @endif
        @endforeach

        @if ($pagination->totalPages > $pagination->currentPage + 5)
            <span class="bg-gray-100 rounded mr-3 px-5 py-3 font-medium">...</span>
        @endif

        <{{ $pagination->currentPage == $pagination->totalPages ? 'span' : 'a' }} href="{{ $pagination->pages[$pagination->totalPages] }}" 
            title="Go to Page {{ $pagination->totalPages }}" 
            class="rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pagination->totalPages ? 'text-white bg-gray-600 hover:text-white font-black' : 'text-blue-700 bg-gray-200 hover:bg-gray-400 font-medium' }}"
        >{{ $pagination->totalPages }}</{{ $pagination->currentPage == $pagination->totalPages ? 'span' : 'a' }}>

        @if ($next = $pagination->next)
            <a
                href="{{ $next }}"
                title="Next Page"
                class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3 font-black"
            >&RightArrow;</a>
        @endif
    </nav>
@endif
