---
id: 288
title: 'Twitter Tip: A Better @replies List in TweetDeck'
date: 2009-03-06T19:13:53-08:00
author: nickmoline
layout: post
guid: http://www.nick.pro/?p=288
permalink: /2009/03/06/twitter-tip-better-replies-in-tweetdeck/
dsq_thread_id: 335274616
categories:
  - Tech
tags:
  - Advice
  - Twitter
  - Guides
---
Both Twitter and TweetDeck (as well as most other Twitter Clients) give you an easy way to get a list of responses people sent you.  On Twitter itself, this is the @Replies tab off of your home page. TweetDeck gives you a Replies column by default, and if you delete it, you can get it back by clicking on the replies button <amp-img title="Replies button in TweetDeck" src="{{ site.baseurl }}/wp-content/uploads/sites/4/2009/03/region-capture-3.png" alt="Replies button in TweetDeck" width="30" height="28" layout="fixed"></amp-img> on the top of the screen.  TweetDeck&#8217;s replies button uses the replies twitter feed feature from the Twitter API to work, so it returns the exact same list that you get on the home page.

I&#8217;ve found however, that I often want to track everything that is said to or about me, even if they are not technically @replies.  Because of this I&#8217;ve ditched the replies column in my TweetDeck and instead have created my own @replies list of sorts using the Search feature in TweetDeck which uses the Twitter Search API. To do this yourself follow the simple instructions after the break.  

<!--more-->

<amp-img title="@Replies tab on Twitter" src="{{ site.baseurl }}/wp-content/uploads/sites/4/2009/03/region-capture-2.png" alt="@Replies tab on Twitter" width="799" height="218" layout="responsive" lightbox>
  <amp-img fallback title="@Replies tab on Twitter" src="{{ site.baseurl }}/wp-content/uploads/sites/4/2009/03/region-capture-2.png" alt="@Replies tab on Twitter" width="799" height="218" layout="responsive" lightbox></amp-img>
</amp-img>

1. Click on the Search icon in TweetDeck <amp-img title="Search Button in TweetDeck" src="{{ site.baseurl }}/wp-content/uploads/sites/4/2009/03/region-capture-4.png" alt="Search Button in TweetDeck" width="26" height="30" layout="fixed">
<amp-img title="Tweet Deck: What are you Searching for?" src="{{ site.baseurl }}/wp-content/uploads/sites/4/2009/03/region-capture-5.png" alt="Tweet Deck: What are you Searching for?" width="447" height="69" layout="responsive" lightbox></amp-img>
2. When you receive the to enter in what you are searching for, enter in a search where you put in all of the possibilities that someone could find a tweet about you separated by OR and end it with **-from:_YourTwitterName_**

The -from:_YourTwitterName_ will filter out messages that come from you, this is important especially if you write a lot of tweets and don&#8217;t want to dominate the feed of tweets that are supposed to be ABOUT you rather then BY you.

In My Search Box, I&#8217;ve entered in the following phrase:

```
NickMoline OR "Nick Moline" OR "Nicholas Moline" OR Nick.pro -from:NickMoline
```

In this Case <a title="Follow @NickMoline on Twitter" href="http://twitter.com/NickMoline" target="_blank">NickMoline is of course my Twitter Name</a> so I search for any tweet that includes that exact twitter name, but filter out messages that came from me, but I also search for `"Nick Moline"`, `"Nicholas Moline"` and `"Nick.Pro"` (this site) to find any other possible mentions of me.  I was surprised to find out that there were a number of posts on twitter that mention me that were not specifically @replied to me.

This tip isn&#8217;t exclusive to TweetDeck either, that&#8217;s just how I use it, you could also <a title="Search mentions of NickMoline" href="https://twitter.com/search?q=NickMoline%20OR%20%22Nick%20Moline%22%20OR%20%22Nicholas%20Moline%22%20OR%20Nick.pro%20-from%3ANickMoline&src=typed_query" target="_blank" class="broken_link">plug that search in at search.twitter.com</a> directly, and then get an Atom feed of the results that you can subscribe to in Google Reader or any other Feed Reader application.