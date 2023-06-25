---
title: Nick's Blog
description: The list of Nick's blog posts
pagination:
    collection: posts
    perPage: 10
---
@extends('_layouts.main')

@section('body')
    <h1>Nick's Blog</h1>

    <hr class="border-b my-6">

    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif
    @endforeach

    @include('_components.pagination')
@stop
