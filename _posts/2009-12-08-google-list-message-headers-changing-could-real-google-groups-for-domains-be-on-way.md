---
id: 346
title: 'Google List Message Headers Changing &#8211; Could real Google Groups for Domains be on the way?'
date: 2009-12-08T11:56:16-08:00
author: nickmoline
layout: post
guid: http://old.nick.pro/?p=346
permalink: /2009/12/08/google-list-message-headers-changing-could-real-google-groups-for-domains-be-on-way/
dsq_thread_id: 935909034
categories:
  - Tech
  - News
tags:
  - Google
  - Google Groups
  - GSuite
---
**UPDATE: I was right, tonight <a href="http://googleblog.blogspot.com/2009/12/join-this-group-google-groups-joins.html" target="_blank">Google announced Google Groups is now part of Google Apps for Domains</a>!**

This morning I noticed a change in the way emails sent to a group (formerly known as list) email address on google apps for domains appear. Below is an example of the bottom of the email headers on an email sent to one of my groups on nick.pro:

<!--more-->

<amp-img title="Old Mailing List MIME Headers" alt="Old Mailing List MIME Headers" src="{{ site.baseurl }}/wp-content/uploads/sites/4/2011/05/oldmailinglist.png" width="958" height="187" layout="responsive" lightbox></amp-img>

On the other hand here is the bottom of the email headers on an email sent to that same group today:

<amp-img title="New Mailing List MIME Headers" alt="New Mailing List MIME Headers" src="{{ site.baseurl }}/wp-content/uploads/sites/4/2011/05/newmailinglist.png" width="953" height="255" layout="responsive" lightbox></amp-img>

As you can see in these images, a few new list specific header lines have been added that make lists appear more like they were handled by more traditional mailing list software, rather then a simple email forwarder.

I&#8217;ve confirmed this change seems to have happened today as emails to groups as recently as yesterday do not have the additional headers, while emails to the same groups today have the additional headers, hop past the break to see a breakdown of the 4 new headers and what I think this change means:

***

The important new headers are:

* **List-Help**, which contains both a link to a support for the mailing list, as well as a new listname+help@domain email address for list support
* **Sender**, which is now set to listname+owner@domain rather then being left off of the header (and thus defaulting to the original sender&#8217;s From: address
* **X-Original-Sender**, which is the original &#8220;sender&#8221; in this case the same as the from address
* **X-Original-Authentication-Results**, which contains the SPF parsing results from when google processed the original email

What does this mean? I think it means Google is finally making an effort to turn the groups in Google Apps for Domains (already taking a step closer to real mailing lists earlier this year when they improved the permission system on who can send email to the list), into real mailing lists closer to the popular Google Groups service. If this is true, and I hope it is, we should be seeing additional Google Groups type features (such as archiving, subscription, and digest options) coming to Groups in Google Apps for Domains soon.