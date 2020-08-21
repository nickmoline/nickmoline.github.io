---
id: 288
title: 'Twitter Tip: A Better @replies List in TweetDeck'
date: 2009-03-06T19:13:53-08:00
author: nickmoline
layout: post
guid: http://www.nick.pro/?p=288
permalink: /2009/03/06/twitter-tip-better-replies-in-tweetdeck/
dsq_thread_id:
  - "335274616"
  - "335274616"
Views:
  - "7"
  - "7"
readability_ARI:
  - "9.6"
  - "9.6"
readability_CLI:
  - "8.2"
  - "8.2"
readability_LIX:
  - "29.6"
  - "29.6"
word_stats_word_count:
  - "406"
  - "406"
word_stats_keywords:
  - 's:198:"a:11:{s:7:"caption";i:3;s:7:"replies";i:9;s:7:"twitter";i:11;s:9:"tweetdeck";i:6;s:4:"list";i:3;s:4:"feed";i:4;s:6:"search";i:9;s:4:"find";i:3;s:10:"nickmoline";i:3;s:4:"nick";i:4;s:6:"moline";i:4;}";'
  - 's:198:"a:11:{s:7:"caption";i:3;s:7:"replies";i:9;s:7:"twitter";i:11;s:9:"tweetdeck";i:6;s:4:"list";i:3;s:4:"feed";i:4;s:6:"search";i:9;s:4:"find";i:3;s:10:"nickmoline";i:3;s:4:"nick";i:4;s:6:"moline";i:4;}";'
word_stats_cached:
  - "1"
  - "1"
categories:
  - General
---
<div id="attachment_289" style="width: 160px" class="wp-caption alignright">
  <a href="http://twitter.com/replies"><img aria-describedby="caption-attachment-289" class="size-thumbnail wp-image-289" title="@Replies tab on Twitter" src="{{ site.baseurl }}/wp-content/uploads/2009/03/region-capture-2-150x40.png" alt="@Replies tab on Twitter" width="150" height="40" data-recalc-dims="1" /></a>
  
  <p id="caption-attachment-289" class="wp-caption-text">
    @Replies tab on Twitter
  </p>
</div>

Both Twitter and TweetDeck (as well as most other Twitter Clients) give you an easy way to get a list of responses people sent you.  On Twitter itself, this is the @Replies tab off of your home page. TweetDeck gives you a Replies column by default, and if you delete it, you can get it back by clicking on the replies button<img class="alignnone size-full wp-image-290" title="Replies button in TweetDeck" src="{{ site.baseurl }}/wp-content/uploads/2009/03/region-capture-3.png" alt="Replies button in TweetDeck" width="30" height="28" data-recalc-dims="1" /> on the top of the screen.  TweetDeck&#8217;s replies button uses the replies twitter feed feature from the Twitter API to work, so it returns the exact same list that you get on the home page.

I&#8217;ve found however, that I often want to track everything that is said to or about me, even if they are not technically @replies.  Because of this I&#8217;ve ditched the replies column in my TweetDeck and instead have created my own @replies list of sorts using the Search feature in TweetDeck which uses the Twitter Search API. To do this yourself follow the simple instructions after the break.  
<!--more-->

  1. Click on the Search icon in TweetDeck [<img class="alignnone size-full wp-image-291" title="Search Button in TweetDeck" src="{{ site.baseurl }}/wp-content/uploads/2009/03/region-capture-4.png" alt="Search Button in TweetDeck" width="26" height="30" data-recalc-dims="1" />]({{ site.baseurl }}/wp-content/uploads/2009/03/region-capture-4.png?ssl=1)
  2. [<img class="alignright size-thumbnail wp-image-292" title="Tweet Deck: What are you Searching for?" src="{{ site.baseurl }}/wp-content/uploads/2009/03/region-capture-5-150x23.png" alt="Tweet Deck: What are you Searching for?" width="150" height="23" data-recalc-dims="1" />]({{ site.baseurl }}/wp-content/uploads/2009/03/region-capture-5.png?ssl=1)When you receive the prompt on the right to enter in what you are searching for, enter in a search where you put in all of the possibilities that someone could find a tweet about you separated by OR and end it with **-from:_YourTwitterName_**

The -from:_YourTwitterName_ will filter out messages that come from you, this is important especially if you write a lot of tweets and don&#8217;t want to dominate the feed of tweets that are supposed to be ABOUT you rather then BY you.

In My Search Box, I&#8217;ve entered in the following phrase:

> NickMoline OR &#8220;Nick Moline&#8221; OR &#8220;Nicholas Moline&#8221; OR Nick.pro -from:NickMoline

In this Case <a title="Follow @NickMoline on Twitter" href="http://twitter.com/NickMoline" target="_blank">NickMoline is of course my Twitter Name</a> so I search for any tweet that includes that exact twitter name, but filter out messages that came from me, but I also search for &#8220;Nick Moline&#8221;, &#8220;Nicholas Moline&#8221; and &#8220;Nick.Pro&#8221; (this site) to find any other possible mentions of me.  I was surprised to find out that there were a number of posts on twitter that mention me that were not specifically @replied to me.

This tip isn&#8217;t exclusive to TweetDeck either, that&#8217;s just how I use it, you could also <a title="Search mentions of NickMoline" href="http://search.twitter.com/search?q=NickMoline+OR+%22Nick+Moline%22+OR+%22Nicholas+Moline%22+OR+Nick.pro+-from%3ANickMoline" target="_blank" class="broken_link">plug that search in at search.twitter.com</a> directly, and then <a title="Atom feed of searches for mentions of NickMoline on Twitter" href="http://search.twitter.com/search.atom?q=NickMoline+OR+%22Nick+Moline%22+OR+%22Nicholas+Moline%22+OR+Nick.pro+-from%3ANickMoline" target="_blank" class="broken_link">get an Atom feed of the results that you can subscribe to </a>in Google Reader or any other Feed Reader application.