---
id: 606
title: 'What&#8217;s all the Hubbub about anyway?'
date: 2012-03-20T08:40:25-07:00
author: nickmoline
layout: post
guid: http://www.nick.pro/?p=606
permalink: /2012/03/20/pubsubhubbub-headaches/
dsq_thread_id: 618106934
categories:
    - Tech
tags:
    - Coding
    - Google
    - PubSubHubbub

---
I&#8217;ve been fighting with the [PubSubHubbub](http://code.google.com/p/pubsubhubbub/) protocol over the last few days.  I apologize for the test posts which have been causing annoyances to what few readers I actually have.  For those of you who have no idea what PubSubHubbub is, it is a method of allowing people to get updates about new blog posts in real time (or near real time).

<!--more-->

<amp-img src="{{ site.baseurl }}/wp-content/uploads/sites/4/2012/03/pubsubhubbub.png" width="450" height="211" layout="intrinsic" alt="PubSubHubbub Logo" title="PubSubHubbub"></amp-img>

RSS and Atom Feeds have been around for a long time, and they are great at dispensing the content of a blog or site in an easy to consume format.  However just like the home page of the blog, they are just files, sitting on a website waiting for someone to fetch them.  When I write a new post, or change an existing post, people who subscribe to my feed must fetch the feed again in order to know something has changed.

Most feed fetchers do this by what is called &#8220;polling,&#8221; which simply means every X minutes, it goes and fetches the feed again and compares it against what it got the last time it checked the feed.

PubSubHubbub allows feed fetchers to instead subscribe to get notified whenever there is a new post on a feed.  I won&#8217;t bother going into the details of how it works here, but the basic gist is that whenever your blog (the &#8220;**Pub**lisher&#8221;) gets a new update to it&#8217;s feed it posts this just once to the **Hub** (a server that handles the bulk of the process).  The Hub then looks through it&#8217;s list of **Sub**scribers, and does an HTTP Post to a callback url provided by each subscriber, which includes an abbreviated version of the feed&#8217;s contents (just the post(s) that have changed) which the subscriber can then process immediately, rather than waiting till it&#8217;s next scheduled update time.

Simple in theory, in practice it&#8217;s been a pain to work with.