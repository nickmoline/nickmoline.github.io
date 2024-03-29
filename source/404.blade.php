@extends('_layouts.main')

@section('body')
    <div class="flex flex-col items-center text-gray-700 mt-32">
        <h1 class="text-6xl font-light leading-none mb-2">404</h1>

        <h2 class="text-3xl">Page not found.</h2>

        <hr class="block w-full max-w-sm mx-auto border my-8">

        <p class="text-xl">
            Sorry, the page you attempted to load does not exist.  You can <a href="{{ $page->baseUrl }}">Return to the Home Page</a>, or <a href="{{ $page->baseUrl }}/about">Find out more about Nick</a>.
        </p>
    </div>
@endsection
