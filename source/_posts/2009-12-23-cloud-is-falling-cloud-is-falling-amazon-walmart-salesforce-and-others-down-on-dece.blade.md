---
id: 350
title: The Cloud is falling, the Cloud is falling! Amazon, Walmart, Salesforce and others down on December 23rd
date: 2009-12-23 18:20:43
author: nickmoline
extends: _layouts.post
section: content
guid: http://old.nick.pro/?p=350
permalink: /2009/12/23/cloud-is-falling-cloud-is-falling-amazon-walmart-salesforce-and-others-down-on-dece/
dsq_thread_id: 983707291
categories:
  - Tech
tabs:
  - Blunders
  - Internet Outages
  - Amazon
  - Walmart
  - Salesforce
---
A Major pre-christmas internet outage seems to be hitting the heavy hitters on the web right now. Amazon.com, Salesforce.com, and Walmart.com are all offline right now, perhaps even more. Interestingly enough sites running on amazon web services (AWS EC2) seem to be running just fine. An outage of these large sites at the same time is likely a result of an attack of massive proportions.

<!--more-->

**UPDATE:** It appears the outage was actually isolated primarily to the west coast of the US, and was actually an outage of ultradns.com which provided dns for all of the above sites and many others, including netflix and newegg.

EC2 and S3 never actually went down, but S3 urls that actually used s3.amazonaws.com were not functioning, so while many sites with S3 images stopped loading, twitter, which also uses S3 for image hosting did not have a broken image because they had their own dns pointing to S3&#8217;s ips. I also didn&#8217;t notice the EC2 servers being down, but that was because I access EC2 servers with other dns names, not amazonaws.com, had I tried to access them using amazonaws.com urls, I surely would have had difficulty.
