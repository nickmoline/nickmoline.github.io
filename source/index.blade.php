@extends('_layouts.main')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p class="text-gray-700 font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    <section id="bio" itemscope itemtype="http://schema.org/Person" lang="en-US">
        @include("_components.social")

        <p><span itemprop="name"><span itemprop="givenName">Nicholas</span> <span itemprop="additionalName">Scott</span> <span itemprop="familyName">Moline</span></span> is <span itemprop="jobTitle">Head of Engineering</span> at <span itemprop="worksFor" itemtype="http://schema.org/ProfessionalService" itemscope><a href="http://www.jobscan.co/" itemprop="url"><span itemprop="name">Jobscan</span></a> dedicated to making it easier for job seekers everywhere</span>.</p>
        <p>Check out <a href="{{ $page->baseUrl }}/blog" rel="me">Nick Moline's blog</a> to find out more about him. He can also be found on <a href="{{ $page->social['mastodon'] }}" rel="me">the Fediverse as @nickmoline@subspacelinkcom</a>, as well as on <a href="https://www.facebook.com/nickmoline" rel="me">Facebook</a> and <a href="http://www.linkedin.com/in/nickmoline" rel="me">LinkedIn</a>.</p>
        <p>Nick currently lives in <span itemprop="homeLocation" itemtype="http://schema.org/City" itemscope><span itemprop="name">Irvine</span>, <span itemprop="containedIn" itemtype="http://schema.org/State" itemscope><span itemprop="name">California</span></span></span> with his wife <span itemprop="spouse" itemtype="http://schema.org/Person" itemscope><a href="http://www.barbara.pro/" rel="spouse sweetheart date met" itemprop="url"><span itemprop="givenName">Barbara</span> <span itemprop="familyName">Moline</span></a></span>, and their three cats Joules, Chase, and Patches.</p>
    </section>

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop
