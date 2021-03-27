---
layout: post
title: Bonus Action, Two Weapon Fighting
subtitle: Using 2 separate Internet Services (WAN) when working from home
date: 2021-03-27T01:00:00-08:00
permalink: /2021/03/27/two-wan-fighting/
dsq_thread_id: 202103270100
cover: /assets/images/2021/03/tp-link-safestream-multi-wan-router.jpg
coverp: /assets/images/2021/03/tp-link-safestream-multi-wan-router.webp
excerpt: "Working from home makes reliable internet essential, if the internet goes down for days I can't work, to combat this, I need to have another weapon at the ready."
categories:
    - Tech
    - Work
    - Reviews
tags:
    - Networking
    - Routers
    - TP-Link
    - Internet
---
Like many people during the pandemic, I've been working from home for over a year now, first for Justia, then for Ezoic, and now for Jobscan. One of the reasons I moved to Jobscan was because Jobscan offers me the opportunity to work remotely on a permanent basis. Barbara has also now gotten a job that allows her to work from home, though this may not necessarily be permanent for her.

One thing about working from home though, reliable internet is absolutely essential.  If the internet goes down, I can't reliably work, and neither can Barbara.  Unfortunately, as I'm sure you know, no Internet Service Provider, even a Business ISP, has perfect uptime.  Residential ISPs are even less reliable than business ones, and everyone dreads seeing that "Unable to connect to the Internet" error message when they are trying to get their work done.

<amp-img src="{{ site.baseurl }}/assets/images/2021/03/chrome-offline.webp" alt="Unable to connect to the Internet" width="800" height="343" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2021/03/chrome-offline.png" alt="Unable to connect to the Internet" width="800" height="343" layout="responsive"></amp-img>
</amp-img>

As internet is essential for the job, one of the [perks](https://www.jobscan.co/careers) Jobscan offers is a monthly $50 reimbursement to help offset internet costs for employees who are working from home. My original thought when taking the job was "that's awesome, that's like half of my internet bill," but when our ISP had an 8 hour outage one workday, I thought of another idea that would be a better use of that $50, a second broadband internet service.

That particular day I used tethering off my phone in order to work, but if this were to happen a lot, tethering was not going to be good enough, especially with both Barbara and myself working remotely. Last week, the internet went down again, this time for 2 whole days, and after it had been down for hours and a tech not able to come till the next day, I decided enough was enough and the time had come to get a backup internet service.

In businesses, having multiple broadband internet services is fairly common.  At Justia's Mountain View Office, there was a time when we had 3 broadband internet services: Cable from Comcast, DSL from AT&T, and a T1 line from Telepacific (we actually had 2 T1 lines from them, but one was entirely voice).

That first day of the 2 day outage, I contacted Cox (the local cable company) and setup service on their $49.99 a month plan (150 megabit download, 15 megabit upload).  This is considerably slower than the Fibre connection I have with [Consolidated Smart Systems](https://www.consolidatedsmart.com/axis-2300) (940 megabit download, 940 megabit upload), but as a backup connection it will do nicely.  I swung by the local Cox office to pick up a cable modem, brought it home and hooked it up to the previously unused cable jack in the apartment.  For that particular outage, I could just connect to the wifi that comes with the cable modem and use it till my main internet was back up, but I knew that going forward I was going to want a more automated system.

Business network routers, such as those [popularized by Cisco](https://www.cisco.com/c/en/us/products/security/adaptive-security-appliance-asa-software/index.html) often support multiple WAN connections, but it is rare to see a residential network router that could support multiple high-speed internet services at once (_some support hooking up a usb cellular internet dongle, but not 2 full fledged broadband services_), in fact I couldn't find one.

The problem of course is that most of these business routers are quite expensive, designed to fill the needs of entire offices they can cost hundreds or even thousands of dollars for a router that will support connecting to multiple internet services and either load balancing connections or handling an automatic failover in the event the primary connection goes down.

I could create my own router using a linux box with 3 gigabit network cards, but making one that would robustly handle our connections would still be costly to setup and run. Not sure what I was going to do, I decided to see if I could find an affordable dual-wan router I could setup in my apartment that would handle most of the functionality I needed.

<amp-img src="{{ site.baseurl }}/assets/images/2021/03/tp-link-safestream-multi-wan-router.webp" alt="TL-R605 SafeStream Multi-WAN VPN Router" width="3859" height="2170" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2021/03/tp-link-safestream-multi-wan-router.jpg" alt="TL-R605 SafeStream Multi-WAN VPN Router" width="3859" height="2170" layout="responsive"></amp-img>
</amp-img>

To my absolute amazement, I found a router that not only could handle this with 2 WAN connections, but up to 4 WAN connections, while also supporting a lot of the other features typically found in much more expensive business routers, for only [$59.99 on Amazon](https://www.amazon.com/dp/B08QTXNWZ1/).

The [TL-R605 SafeStream Multi-WAN VPN Router](https://www.tp-link.com/us/business-networking/omada-sdn-router/tl-r605/) from tp-link is a shockingly good small business router for the price.  

The device has a total of 5 gigabit ethernet ports on it.  The first one is dedicated to the first WAN connection, and the last one is dedicated to a LAN connection.  The remaining 3 ports can be switched between either WAN or LAN depending on your needs allowing connections to up to 4 separate internet providers, which can be setup in a variety of different ways (load balanced, failover, combined) which made it nearly perfect for my setup.

<amp-img src="{{ site.baseurl }}/assets/images/2021/03/TL-R605-ports.webp" alt="TL-R605 Configurable WAN/LAN ports" width="1000" height="1000" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2021/03/TL-R605-ports.jpg" alt="TL-R605 Configurable WAN/LAN ports" width="1000" height="1000" layout="responsive"></amp-img>
</amp-img>

I have 4 ethernet ports in the apartment wired up (one in each of the 3 bedrooms, and one in the living room), so since I'd only have 3 LAN ports on this router, I needed a small switch to wire up them all.  So I picked up tp-link's 5-port [TL-SG105E](https://www.tp-link.com/us/business-networking/easy-smart-switch/tl-sg105e/) as well for [$22.39 on Amazon](https://www.amazon.com/gp/product/B00N0OHEMA) which solves that problem.

With some relatively simple configuration, I now have the router configured to normally route me through the gigabit connection, but monitor that connection to make sure it says online.  If the connection is detected as going offline, the router will automatically switch everyone in the apartment over to the slower (but presumably still online) cable connection.  At what point it detects that the main connection is back online, it will automatically switch back to the faster connection.

I've simulated these outages several different ways and the most I spend offline is about 20 seconds, which is very reasonable for me.

## Other functionality of the TL-R605

I mentioned before that the TL-R605 was surprisingly feature rich.  While the multi-WAN support was my primary draw to the device, I was pleasantly surprised to see a lot of other traditionally business related features are there as well, and I'll make use of a lot of them.

### VPN

The TL-R605 supports up to 68 concurrent VPN connections, many of which can be LAN-to-LAN, allowing for seamless connection of networks in multiple locations into a single large network.  It supports 16 connections using [OpenVPN](https://openvpn.net/), with an additional 16 connections using [L2TP](https://en.wikipedia.org/wiki/Layer_2_Tunneling_Protocol) and 16 connections using [PPTP](https://en.wikipedia.org/wiki/Point-to-Point_Tunneling_Protocol).  On top of all that, an additional 20 [IPsec](https://en.wikipedia.org/wiki/IPsec) connections in either Client-to-LAN or LAN-to-LAN modes are supported.

IPsec is particularly interesting as traditionally IPsec is expensive to license, and even expensive routers often don't support all 4 of these protocols at the same time.  I will certainly be setting up both inbound and outbound VPN connections to give me flexibility, making external resources available to me, as well as giving me a way to connect home when I'm outside of the home.

### VLAN and VLAN Routing

A common feature on expensive business routers is the concept of a [Virtual LAN](https://en.wikipedia.org/wiki/Virtual_LAN), the idea of running multiple isolated network environments over the same physical network and handling each of them differently.  Individual clients can specify which VLAN they want to be a part of by specifying a number between 1 and 4094, and you can also configure specific ports on either the router OR smart network switches (like the previously mentioned TL-SG105E) to force users onto a specific VLAN automatically.

Having isolation can increase security as well as network throughput, especially when dealing with a broadcast situation.  Some devices send out messages to an entire network at once, meaning any time those devices are broadcasting, it impacts the bandwidth of all other devices on the network.  By isolating these devices onto a specific VLAN, I can ensure that broadcast messages from those devices only go to the other devices in the same VLAN, freeing up valuable bandwidth on other network ports.

Different VLANs can also have their routing be different.  You can have a VLAN that doesn't access the internet at all, you can have a VLAN that can access the internet and other devices on the network, you can have a VLAN that only can access the internet without giving them access to the rest of the network.

Even more exciting you can have different VLANs routed through the different WANs by default.  For example, I have a lot of IoT devices in my apartment, these need access to the internet but don't need the high speeds that my computers do.  To free up a little internet bandwidth on my main internet connection I can configure the IoT devices to go out through the slower internet connection by default even if the main internet is online.  Doing so actually is better both for computers AND the IoT devices.

### Guest Networks with Captive Portal

If you have a wireless access point that supports VLANs for internal vs guest connections, I can also handle that through the main router.  This isn't a particularly high priority for me right now as I have no guests coming by my home during the pandemic, but eventually I am likely to look into replacing my wifi with an access point that supports this, such as the companion devices from tp-link such as the [EAP660 HD](https://www.amazon.com/dp/B08PW34WPX/) which also supports the newer WiFi 6 standard.  When I do, this router supports setting up a captive portal where guests can't simply connect to an open wifi, but have to authenticate using some means or another.  I can setup the captive portal to allow many different methods of authenticating, including using facebook login to authenticate.

## Staying Online

I am extremely happy with this device and my now much more robust network setup at home.  There are still things I want to do to improve my network setup (starting with cleaning up the rats nest of wires that was left by the previous tenant).  

I'd like to setup a full internal server for my home, perhaps even a cluster I can run [K8s](https://kubernetes.io/) on and push an internal cluster of containers for development and management.

I am already running my own internal DNS server that doesn't call up to my ISPs dns server within the home.  This is currently running on a [Raspberry Pi 4](https://www.raspberrypi.org/) but I'd like to increase to a more powerful home server in the future.

I'd also like to pick up a [Uninterruptible Power Supply (UPS)](https://en.wikipedia.org/wiki/Uninterruptible_power_supply) for my network closet, so that a short power outage won't result in all the devices having to reboot and spend the several minutes to boot up again.