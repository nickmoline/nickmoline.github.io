---
id: 685
title: 'Web Intents are Great &#8211; Web Intents are Horrible'
date: 2012-05-30T14:06:24-07:00
author: nickmoline
excerpt: "Web Intents in Google Chrome 19+ changed what happens when you view an Atom or RSS Link, here's how to get your XML Back"
layout: post
guid: http://www.nick.pro/?p=685
permalink: /2012/05/30/web-intents-atom-annoyance/
dsq_thread_id:
  - "708759183"
  - "708759183"
Views:
  - "498"
  - "498"
readability_ARI:
  - "11.4"
  - "11.4"
readability_CLI:
  - "8.6"
  - "8.6"
readability_LIX:
  - "31.1"
  - "31.1"
word_stats_word_count:
  - "371"
  - "371"
word_stats_keywords:
  - 's:173:"a:10:{s:4:"feed";i:7;s:6:"google";i:5;s:6:"chrome";i:7;s:4:"like";i:4;s:7:"instead";i:4;s:6:"reader";i:6;s:5:"feeds";i:3;s:7:"caption";i:3;s:7:"intents";i:3;s:4:"just";i:3;}";'
  - 's:173:"a:10:{s:4:"feed";i:7;s:6:"google";i:5;s:6:"chrome";i:7;s:4:"like";i:4;s:7:"instead";i:4;s:6:"reader";i:6;s:5:"feeds";i:3;s:7:"caption";i:3;s:7:"intents";i:3;s:4:"just";i:3;}";'
word_stats_cached:
  - "1"
  - "1"
categories:
  - Blogging
  - Google
  - Tech
  - Work
---
Since the very beginning, when met with an Atom or RSS feed, Google Chrome responds by rendering the XML as unformatted xml (unless your feed happens to have an XSL stylesheet like feedburner adds).  One of the <a href="http://code.google.com/p/chromium/issues/detail?id=84" target="_blank">earliest bugs reported</a> to Google is that this should not be, that it would instead be more friendly to invite the user to subscribe to the feed in a feed reader (like Firefox does) or render the feed yourself (like Safari does).

In the recently released stable Chrome 19, one of the new features is that instead of displaying the XML as unformatted xml, it fires off a <a href="http://webintents.org/view" target="_blank" class="broken_link">view web intent</a> instead.  This may be a good first step towards making feeds friendlier to use.  Instead of seeing a page the average reader doesn&#8217;t understand, they could be shown their own apps that they&#8217;ve installed.<!--more-->

<div id="attachment_686" style="width: 310px" class="wp-caption alignright">
  <a href="{{ site.baseurl }}/wp-content/uploads/2012/05/Region-capture-5.png?ssl=1"><img aria-describedby="caption-attachment-686" class="size-medium wp-image-686 " title="No Results found" alt="No Results found" src="{{ site.baseurl }}/wp-content/uploads/2012/05/Region-capture-5-300x158.png" width="300" height="158" data-recalc-dims="1" /></a>
  
  <p id="caption-attachment-686" class="wp-caption-text">
    Searching the chrome web store for a feed reader gives you squat
  </p>
</div>

Unfortunately the default does not suggest any feed reader apps, and clicking on the link to search the chrome web store for an app gives you an unfortunately inconvenient &#8220;No Results Found.&#8221;  Google really should have anticipated the release of their own new browser with a full web app for Google Reader with support for web intents, but it appears they didn&#8217;t.  In fact, there still does not appear to be an official google reader web app for chrome.

Even more annoying for me, is there doesn&#8217;t seem to be any way to just view the XML in chrome like I used to.  As a developer I&#8217;m often working on feeds for various projects.  When I&#8217;m testing these feeds, I need to be able to see the XML and the new web intents support drives me nuts.  So nuts in fact that I started looking for information on developing a webintents enabled web app just so that I could create my own app that shows me the XML.

Fortunately, I&#8217;m not the only person who finds this annoying, and even more fortunately, someone has already saved me the trouble of writing my own web intents app just so that I can see the XML.  A Developer named <a href="https://plus.google.com/111567061469336027617/" target="_blank">Mihai Parparita</a> has <a href="https://chrome.google.com/webstore/detail/oceapojkdgeophkjdijkpbjifdnfimdh" target="_blank">created a chrome app</a> that does exactly that!  For more details, check out <a href="http://blog.persistent.info/2012/05/feed-web-intent-viewer.html" target="_blank">his blog post</a> on the matter.