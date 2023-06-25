---
id: 996
title: Automatically post your WordPress blog to Google+ with Jetpack
date: 2013-12-12 16:11:27
author: nickmoline
excerpt: "Automattic's Jetpack Wordpress plugin now lets you automatically post your blog posts to Google+ on publish"
extends: _layouts.post
section: content
guid: https://www.nick.pro/?p=996
permalink: /2013/12/12/automatically-post-wordpress-blog-google-jetpack/
dsq_thread_id: 2046965126
cover: /wp-content/uploads/sites/4/2013/12/Region-capture-3.png
coverp: /wp-content/uploads/sites/4/2013/12/Region-capture-3.webp
categories:
    - Tech
tags:
    - Google+
    - WordPress
    - Social Media
    - Guides
---
Many people have long lamented that unlike Twitter, Facebook, LinkedIn, Tumblr, and many other services, Google+ does not let you use an API to post.  There is an API for posting to Google+ Pages, but Google is restricting this feature to approved services.  Apparently WordPress.com is one of those services, and in the latest 2.7 version of the <a href="http://jetpack.me/" target="_blank">Jetpack plugin</a> for self-hosted WordPress blogs released yesterday, they are [extending that service to your own self hosted WordPress blog](http://jetpack.me/2013/12/11/jetpack-2-7-publicize/).

<!--more-->

It is interesting to note that the blog post on Jetpack&#8217;s blog indicates that this feature works both for Pages _**and**_ individual profiles as well, which the Google+ Platform API documentation specifically says you cannot do.

This helps save time and energy when posting blog posts, and also helps if you schedule your blog posts for later.  With this feature you can now schedule your blog posts to post at a specified time and rest easy knowing that it will be shared to Google+ at the same time.  This is also a great feature for multi-author blogs.  You can add multiple Google+ Profiles and Pages to the feature and have your posts post both to your individual profile as an author and to a shared page for the blog as a whole.

In the past, Google has specifically shied away from adding an API that will allow people to automatically post to Google+ in fear of becoming flooded with app-posted junk posts that have plagued Twitter and Facebook for years.  This is why Google has kept the list of apps that can post to Google+ limited.  It&#8217;s important to note that JetPack does not post to Google+ directly, but instead, like the rest of the services on JetPack, calls to an API on WordPress.com to have <a href="http://automattic.com/" target="_blank">Automattic&#8217;s</a> servers post for you.

Publicize also supports automatic posting to Facebook, Twitter, Tumblr and Path.
