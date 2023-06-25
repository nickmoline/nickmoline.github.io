---
title: About Nick Moline
description: A little bit about Nick Moline
---
@extends('_layouts.main')

@section('body')
    <h1>Who is Nick Moline?</h1>

    <picture title="Photo of Nick Moline" class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">
        <source srcset="{{ $page->baseUrl }}/wp-content/uploads/sites/4/2018/10/nick-square.webp" type="image/webp">
        <source srcset="{{ $page->baseUrl }}/wp-content/uploads/sites/4/2018/10/nick-square.jpg" type="image/jpeg">
        <img src="{{ $page->baseUrl }}/wp-content/uploads/sites/4/2018/10/nick-square.jpg" alt="Photo of Nick Moline">
    </picture>

    <p class="mb-6">Nicholas Scott Moline is Head of Engineering at <a href="https://www.jobscan.co">Jobscan</a>, a company dedicated to helping job-seekers optimize their resumés and cover letters when applying for jobs.  Nick currently lives in Irvine, CA with his wife Barbara, Mother-in-Law and Brother-in-Law, and their 3 cats Joules, Chase, and Patches.</p>

    <a class="social-link" href="https://www.facebook.com/nickmoline" target="_blank"><i class="fa fa-facebook"></i></a><a class="social-link" href="https://twitter.com/NickMoline" target="_blank"><i class="fa fa-twitter"></i></a><a class="social-link" href="https://www.instagram.com/nickmoline" target="_blank"><i class="fa fa-instagram"></i></a><a class="social-link broken_link" href="https://www.linkedin.com/in/nickmoline" target="_blank"><i class="fa fa-linkedin"></i></a>

    <p class="mb-6">Check out <a href="{{ $page->baseUrl }}/blog">Nick's blog</a> to find out more about him. He occasionally wrote on <a href="https://onward.justia.com/author/nickmoline">Justia's Blog</a> while he worked there, and still occasionally writes essays on <a href="https://www.hp-lexicon.org/author/nickmoline">The Harry Potter Lexicon</a>, a site for which he is a the resident Tech Wizard.</p>

@endsection
