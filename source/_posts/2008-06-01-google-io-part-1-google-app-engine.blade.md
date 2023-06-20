---
id: 171
title: 'Google I/O Part I: Google App Engine'
date: 2008-06-01 15:34:50
author: nickmoline
extends: _layouts.post
section: content
guid: http://www.nick.pro/?p=171
permalink: /2008/06/01/google-io-part-1-google-app-engine/
cover: /wp-content/uploads/sites/4/2008/05/100_0920.jpg
coverp: /wp-content/uploads/sites/4/2008/05/100_0920.webp
dsq_thread_id: 335274540
categories:
  - Events
  - Tech
tags:
  - Google I/O
  - Google
  - Google Cloud
  - Google App Engine
---
This week I, as well as [my Wife Barbara](http://www.barbara.pro), and my co worker [Dan](http://www.danvuquoc.com/), went to [Google I/O](http://code.google.com/events/io/). People who have read my blog for a while may remember that last year I attended [Google Developer Day]({{ $page->postUrl("2007-06-03-google-developer-day-2007") }}) around this same time in San Jose. This year Google decided to expand from a single day to a whole two-day tech conference and move it to the Moscone Center in San Francisco.

<!--more-->

While last year&#8217;s big ticket item was [Google Gears](http://gears.google.com), this year&#8217;s conference was focused on the new [Google App Engine](http://code.google.com/appengine/), a method of hosting a dynamic application using Google&#8217;s cloud system. App Engine is definitely impressive, and an interesting way to expand the cloud computing idea popularized by Amazon&#8217;s EC2 system, into something where the developer doesn&#8217;t have to worry about the expansion points. That is to say with EC2 you use virtual machines, and if you want to expand you are responsible for starting up another virtual machine and handling the load balancing. With Google&#8217;s system, you just upload your application and google takes care of scaling it, load balancing it, and everything. What&#8217;s more you only pay for CPU time that you are actually REALLY using. With EC2, in order to serve any sort of real requests you have to be running at least one instance all the time, and you are being charged for that instance, which will cost you about $70/month before any data transfer costs. With Google your application is always ready for requests, but you aren&#8217;t being charged for idle time (time sitting there waiting for requests), just the time that you are actually serving requests, which should make things much cheaper.

Several developers I talked to at the conference also said they liked the idea of App Engine over EC2 because it makes it so that the developers don&#8217;t have to do any server administration. With EC2 your instance is a virtual server, and you have to do everything with the server that you normally would have to do with a server, (installing software, configuring apache hosts, etc.) whereas google&#8217;s system just runs, always ready to accept requests.

But everything is not all roses with App Engine, the simplicity of scaling and administration have necessitated some pretty real limitations.

* No real disk access, all data storage has to be done in the database, which makes it additional work to port any existing system that requires access to files.
* Proprietary database that is vastly different then common Relational Database systems (data is stored like an object, with properties of the object). Their database system has some cool applications to it, like the ability to interact with GData APIs directly in the database, but it&#8217;s so different than any system out there (with the exception perhaps of Bigtable on which it is based, and SimpleDB from Amazon) that it is very difficult to port applications written for say MySQL over to it.
* What&#8217;s more there are limitations within the database itself, each bit of data is limited to 1MB, so coupled with the limitation above, if you want to store images in it, you have to make sure the images are all under 1MB or chop them up. Also, and this is a bit surprising for Google, there is no full text search in this database, so you cannot build any applications that require a full text search&#8230; at all!
* Development in Google Apps Engine is limited only to the Python programming language, which again, limits who can use it. I for one have never learned Python, so that limits my ability to use it.

Anyway, despite these caveats, I find App Engine a promising system that I&#8217;d like to try to use, but for the moment that&#8217;s hard. I&#8217;ll be sure to write an update to my review of App Engine once I have had an opportunity to actually use it. And look for more articles about my experiences at Google I/O as I get time to write them.
