---
id: 944
title: 'Warning: WordPress Brute Force Attack'
date: 2013-04-23T14:07:18-07:00
author: nickmoline
excerpt: In light of the massive wordpress brute force attack going on, here is some advice to lock down your blog from being attacked.
layout: post
guid: https://www.nick.pro/?p=944
permalink: /2013/04/23/warning-wordpress-brute-force-attack/
dsq_thread_id: 1231682758
cover: /wp-content/uploads/sites/4/2013/04/4746558506_9fe6e169b9_o.jpg
categories:
    - Tech
tags:
    - Security
    - WordPress
    - Guides
---
After [my blog was hacked]({% post_url 2012-11-12-losing-my-geek-cred-nick-pro-hacked %} "Losing my Geek Cred: Nick.pro hacked") a few months ago, I&#8217;ve been understandably more security conscious on my blog.  One of the things I&#8217;ve done is install a few security plugins (most notably <a title="Wordfence Security - WordPress Plugins" href="http://wordpress.org/extend/plugins/wordfence/" target="_blank">Wordfence Security</a>).  Wordfence is an absolutely fantastic security plugin, it monitors the files in your site to make sure that they don&#8217;t change unexpectedly, and more importantly it monitors login attempts (and other page requests on your site) for potentially harmful login attempts.

<!--more-->

Over the past few weeks a <a title="Global WordPress Brute Force Hacks" href="http://www.wordfence.com/forums/topic/global-brute-force-hacks/" target="_blank" class="broken_link">global brute force attack</a> has been targeting wordpress installations.  I first found out about it because Wordfence started notifying me that there were more failed login attempts than usual.

Protect yourself and your blog with the following crucial steps:

1. **Don&#8217;t use &#8220;admin&#8221;:**
    * If you have a user named &#8220;admin&#8221; on your wordpress installation, get rid of it!  If it is your only admin user, create a new one, log out of admin, and in as your new admin user, and then delete the user named &#8220;admin.&#8221;  The brute force attack is trying thousands of passwords with the user named admin.
2. **Use a good password:** 
    * Please don&#8217;t use &#8220;password&#8221; or &#8220;admin&#8221; or &#8220;god&#8221; or your birthday, pet&#8217;s name, or any other easily guessed password.  Use a good password.  The brute force attack is trying both a list of the top 10,000 passwords, and a dictionary random word attack.  Protect yourself, don&#8217;t use a password that is easily broken!
3. **Use a security plugin to prevent login attempts:** 
    * As I mentioned above, I use <a title="Wordfence Security" href="http://wordpress.org/extend/plugins/wordfence/" target="_blank">Wordfence Security</a> by <a title="Mark Maunder" href="http://www.wordfence.com/contact/" target="_blank">Mark Maunder</a>.  This plugin is fantastic.  Not only can you set it up to lock people out if they fail to log in a certain number of times, but you can rig it where if they try a username you don&#8217;t have (like admin, because you followed step 1) it will lock them out immediately.
    * It will also notify you when it has locked someone out, and can notify you if someone successfully logs in.  This way you can have a warning if someone does manage to break through your secure password.
    * It also monitors the files on your wordpress installation and notifies you if any of the files in your themes and plugins unexpectedly changes.  This is a great plugin and I highly recommend it.

I hope this helps you secure your blog from this attack.

_Battering Ram Image Credit: <a title="Battering Ram Image Credit" href="http://www.flickr.com/photos/noii/4746558506/" target="_blank">flickr.com/noii</a>_