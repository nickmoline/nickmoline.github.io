---
id: 850
title: 'Losing my Geek Cred: Nick.pro hacked'
date: 2012-11-12T00:37:25-08:00
author: nickmoline
layout: post
guid: http://www.nick.pro/?p=850
permalink: /2012/11/12/losing-my-geek-cred-nick-pro-hacked/
dsq_thread_id: 924150500
cover: /wp-content/uploads/sites/4/2012/11/776464_87968784.jpg
coverp: /wp-content/uploads/sites/4/2012/11/776464_87968784.webp
categories:
    - Tech
tags:
    - Security
---
If you attempted to visit my blog on Friday using either Firefox or Chrome, you most likely received a warning that the site was compromised and dangerous.  While I&#8217;m still not sure how they got through, I can tell you that my blog was compromised.  Code was injected into the site in every place where javascript was being output that attempted to install malware on the computers of people who visited nick.pro.

No it was not because I was lazy and didn&#8217;t keep my blog up to date because I did.  The blog was already running the most up to date version of wordpress available.  The compromise most likely came through a vulnerability in one of the plugins or in the theme I was using.

My first inclination would be to pretend that such an embarrassing lapse of security never happened, but I thought that perhaps the tale of how I&#8217;ve brought things back up might help others who find their websites hacked as well.

<!--more-->

The infection first came up on Wednesday night and was pointed out to me by a coworker.  I spent a few hours cleaning out all the injected javascript and doing what I thought would lock down the site from being infected again.  Unfortunately Thursday night at just before midnight, the infection recurred.  Rather than spend hours trying to clean it out again, I took the entire site down, and left up a simple &#8220;offline&#8221; message with a 503 status code to indicate that it was a temporary outage (as suggested under Quarantine your Site on google&#8217;s &#8220;<a href="http://support.google.com/webmasters/bin/answer.py?hl=en&answer=163634" target="_blank">Cleaning your site</a>&#8221; help page).

Friday night I did a fresh install of the wordpress software with a new database, new database password, and new password for my user.  I then imported my content from a backup copy from well before the hack (you do make regular backups of your blog&#8217;s content right?) and manually copied over the images (and only the images) from a backup as well.

Because I am still unsure how the attacker gained access to my site, I installed only the bare minimum plugins to get my site functioning again, and for the moment am using the default <a href="http://wordpress.org/extend/themes/twentyeleven" target="_blank">TwentyEleven</a> WordPress theme that comes with a stock wordpress installation.  When I have more time I will make a brand new theme not using any existing theme as a basis in case it was the theme I was using that was compromised.

I held off writing this &#8220;I&#8217;m back&#8221; post for the weekend in case somehow I still didn&#8217;t have the leak secured, but the site has not been compromised again, so hopefully the worst is behind me.