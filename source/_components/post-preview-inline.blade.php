<div class="flex flex-col mb-4">
    <a href="{{ $post->getUrl() }}" title="{{ $post->title }}">
        <div class="rounded-t-lg w-full h-52 bg-gradient-to-br from-cyan-500 to-blue-500">
            @if ($post->coverp || $post->cover)
            <img src="{{ $post->coverp ? $post->coverp : $post->cover }}" class="object-center object-cover w-full h-full rounded-t-lg">
            @else
            <img src="/background-jellybean.webp" title="{{ $post->title }}" class="object-center filter blur-sm object-cover w-full h-full rounded-t-lg">
            @endif
        </div>
    </a>

    <p class="text-gray-700 font-medium my-2">
        {{ $post->getDate() ? $post->getDate()->format('F j, Y') : '' }}
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="{{ $post->title }}"
            class="text-gray-900 font-extrabold"
        >{!! $post->title !!}</a>
    </h2>
    @if ($post->subtitle)
        <h3 class="text-xl mt-0">
            {!! $post->subtitle !!}
        </h3>
    @endif

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
