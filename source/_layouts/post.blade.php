@extends('_layouts.main')

@section('hero')
@if ($page->coverp || $page->cover)
    <div class="cover-image" style="background-image: url('{{ $page->coverp ? $page->coverp : $page->cover }}')">
@endif
        <div class="post-heading">
            <h1>{!! $page->title !!}</h1>
            @if ($page->subtitle)
                <h2>{!! $page->subtitle !!}</h2>
            @endif
            <div class="byline">
                Posted by <a href="{{ $page->authorlink ? $page->authorlink : '/about' }}" rel="author">{{ $page->author ? $page->author : 'Nick Moline' }}</a> on <time datetime="{{ $page->updatedAtom() }}">{{ $page->dateString() }}</time>
            </div>
        </div>
@if ($page->coverp || $page->cover)
    </div>
@endif
@endsection

@section('body')

    @forelse ($page->categoryCollection() as $category)
        <a
            href="{{ $category['path'] }}"
            title="View posts in {{ $category['title'] }}"
            class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
        >{{ $category['title'] }}</a>
    @empty
    @endforelse

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    @if (!empty($page->tagCollection()))
        <div class="mb-10 pb-4">
            Tagged: 
        @forelse ($page->tagCollection() as $tag)
            <a
                href="{{ $tag['path'] }}"
                title="View posts tagged with {{ $tag['title'] }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-3 px-1 pt-px"
            >{{ $tag['title'] }}</a>
        @empty
        @endforelse
        </div>
    @endif

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
