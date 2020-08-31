---
title: Welcome to the new NickMoline.com
permalink: /2020/08/30/welcome-to-nickmoline.com/
cover: /background-jellybean.jpg
coverp: /background-jellybean.webp
excerpt: "After several years of being separate, I've merged my personal sites of NickMoline.com and Nick.pro into a single site, and given it a pretty substantial overhaul at the same time."
categories:
   - Web
   - Writing
tags:
   - Blogging
   - Jekyll
   - Coding
---
For several years, I've had 2 separate personal sites, [NickMoline.com](https://www.nickmoline.com), which for many years was a single page portfolio page which contained nothing but a short bio of me, links to various social media profiles of mine, and a link to [nick.pro](https://www.nick.pro) which was my blog.  The portfolio page was a simple responsive HTML page (you can see [an archive of this page here]({{ site.url }}{% link nickmolinecom.html %})), while the blog was running on WordPress and contained my musings on a variety of topics.

Over time though, both of these sites languished.  I posted to nick.pro only about once per year (_I missed 2018 entirely, with only a single post in 2019_), and nickmoline.com I ignored so long I didn't even realize it had been down for a long time until @emil10001 pointed out that my portfolio page was completely down.  Upon investigation, I noticed that it had actually been down for at least a year, and the last commit to the repo was [on September 1, 2016](https://github.com/nickmoline/nickmoline.github.io/commit/c0234b8c9205ada794d70e1a043a40cb16644533) and consisted of only the [Keybase](https://keybase.io/nickmoline) verification file for the domain.  The last substantial content commits to the page was [in January, 2014](https://github.com/nickmoline/nickmoline.github.io/commit/ef5ad46df31bece8aad76f6bbae4e890cdb86d64).

## Migration

I decided the time had come to give the sites a drastic overhaul, and I decided that there really isn't much reason for 2 separate sites anymore.  I decided to centralize the sites on the domain that matches my full name domain [NickMoline.com](https://www.nickmoline.com/).  I also decided that as much as I love WordPress, I don't really need WordPress for my personal site.  As a coder, I'm actually more comfortable working in an IDE than a CMS.  As such I made the decision to [migrate my blog from WordPress to Jekyll]({% post_url 2020-08-20-migrating-to-jekyll %}).

While an excellent [wordpress plugin](https://wordpress.org/plugins/jekyll-exporter/) to export posts into Jekyll compatible markdown files complete with front-matter exists, I wanted to take this opportunity to make my site 100% [AMP Only](https://amp.dev/) which meant either scripting a change between tags blocked by AMP, or going through the posts one by one and cleaning up the markup to make sure it is compatible with AMP.

### <abbr title="Accelerated Mobile Pages">AMP</abbr>

For those readers who do not know, AMP is an HTML5 framework that [puts limits](https://amp.dev/about/how-amp-works/) on which tags are allowed and how dynamic scripts are executed.  The reason for this is speed, by following these limits [Google](https://developers.google.com/amp), [Bing](https://blogs.bing.com/Webmaster-Blog/September-2018/Introducing-Bing-AMP-viewer-and-Bing-AMP-cache), and [others](https://blog.cloudflare.com/accelerated-mobile/) are able to cache the content of the pages in such a way that they can display the AMP content nearly instantly.

I wrote articles on Justia's Legal Marketing & Technology Blog in [2017](https://onward.justia.com/2017/02/02/amp-your-law-firm-mobile-site/) and [2018](https://onward.justia.com/2018/02/09/amp-update-get-even-amped-2018/) in addition to a number of blog posts based on [events](https://onward.justia.com/tag/amp-project/) related to AMP.

I've long been a fan and champion of the AMP Project and feel it is an important step forward in cleaning up the web after decades of plugins, javascript libraries, extensive backend processing, and larger and larger static resources have resulted in a web that often doesn't meet the performance demands of those who are using it. Google is well aware of this, as I posted on Justia's blog in [July of 2017](https://onward.justia.com/2017/07/05/page-speed-tips-and-tools/) and have long been doing everything they can to make the web perform faster.  AMP is part of this process.

While it is possible (and in fact normal) to make AMP Equivalent versions of existing non-AMP pages for the sake of having the performance of AMP while not sacrificing the interactivity of non-AMP pages, I have long believed it is just as possible to have all of that same interactivity without sacrificing AMP, and as such I made the decision to go AMP only with my site.

You can see evidence of this interactivity throughout this site, from things as simple as [embedded youtube videos]({% post_url 2019-05-30-google-io-2019-io19 %}), to more complex things such as [photo gallery sliders with lightbox popups]({% post_url 2008-08-19-hours-away-from-vacation %}) and [hovering videos that keep playing after you scroll away]({% post_url 2003-09-05-internet-fads %}), all without compromising AMP's various benefits.

For example on pages with lots of images or embeds such as my post about [Google I/O 2019]({% post_url 2019-05-30-google-io-2019-io19 %}), the embeds are only loaded as you scroll down the page, allowing what would normally stall rendering to be deferred until you scroll.

In time I plan to add even more interactivity into this site by implementing [Progressive Web Apps](https://web.dev/progressive-web-apps/) using [amp-install-serviceworker](https://amp.dev/documentation/components/amp-install-serviceworker/) to enable PWA functionality in my AMP page.  `amp-install-serviceworker` allows AMP developers to implement the more dynamic functions that typically require extensive javascript libraries without compromising AMP's requirements by installing it in the background after the content of the page has loaded.  Future loads of the site after that point will be even faster as the service worker will initiate right away and render the more dynamic content immediately upon page load.

### Image optimization and WebP
Another improvement I went through when I setup this new version of my site was optimizing every single image on the site.  I passed all of the JPEG, PNG and GIF images on the site through optimizers such as [ImageOptim](http://imageoptim.com/), and [ImageAlpha](http://pngmini.com/) in order to make the images as small as possible without a noticeable decrease in image quality.  To make this process as efficient as possible I used the great [imageoptim-cli](https://www.npmjs.com/package/imageoptim-cli) command line tool written in Node to enable me to automate the process.

In addition to optimizing the PNG, JPEG, and GIF images as much as possible, I also used the open source [Advanced Batch Image Converter](http://abic.sourceforge.net/) application to create WebP versions of most of the images.  [WebP](https://developers.google.com/speed/webp) is a relatively new image format created by Google along with it's big brother [WebM](https://www.webmproject.org/) which is a video format.  Both formats were designed to make images and videos (respectively) load much quicker without sacrificing quality.  WebP supports alpha transparency like PNGs and full photo quality like JPEG while producing images that are on average 25-35% smaller than JPEG.  WebP even sorts [animations](https://developers.google.com/speed/webp/faq#why_should_i_use_animated_webp) like the older more limited GIF format, allowing for far more robust image formats.

Just about the only downside to WebP is that there are still a few holdouts as far as [browser support](https://caniuse.com/#feat=webp) when it comes to the format.  Safari (including iOS Safari) does not currently support WebP, however Apple has just announced that WebP image support is coming in the upcoming [Safari 14](https://www.macrumors.com/2020/06/22/webp-safari-14/) which will ship with iOS 14 and macOS 11 Big Sur.

While Microsoft's Internet Explorer does not support WebP (and won't), Internet Explorer has been discontinued and  Microsoft's own apps will stop supporting the browser starting with Microsoft Teams removing support on November 30th, 2020 and all Microsoft 365 apps [removing support by August 17, 2021](https://techcommunity.microsoft.com/t5/microsoft-365-blog/microsoft-365-apps-say-farewell-to-internet-explorer-11-and/ba-p/1591666).  The newer Edge browser which replaces Internet Explorer [added support for WebP in Edge version 18](https://blogs.windows.com/msedgedev/2018/10/04/edgehtml-18-october-2018-update/).

Mozilla Firefox [added support for WebP in version 65](https://hacks.mozilla.org/2019/01/firefox-65-webp-flexbox-inspector-new-tooling/#:~:text=Media%3A%20Support%20for%20WebP%20and,with%20the%20same%20image%20quality.) released in January, 2019.

Once Apple's Safari 14 achieves widespread adoption, we can comfortably say that WebP support has near universal support.

In order to make sure that browsers that don't yet support WebP, I made sure to implement the [fallback](https://amp.dev/documentation/guides-and-tutorials/develop/style_and_layout/placeholders/) protocol in the amp-img spec to ensure that browsers that don't yet support WebP will be served the JPEG or PNG equivalent format instead.

```html
<amp-img src="[webpurl]" width="x" height="y" layout="responsive" lightbox>
   <amp-img fallback src="[jpegurl]" width="x" height="y" layout="responsive" lightbox></amp-img>
</amp-img>
```

This ensures that browsers that do support WebP will be served the lighter faster image format, while browsers that don't yet support it will still be able to work by being served a still optimized as much as possible JPEG or PNG version.

### Cleaning Up Content
Since I went through every post by hand, I spent time cleaning up old pages that were originally marked up in XHTML or even [HTML4]({% post_url 2004-08-17-archive-tweaks %}).  Some particularly bad posts include a [personality test]({% post_url 2006-05-30-personality-test %}) I took back in 2006 which had multiple embedded tables and had Gauges made by repeating pipe symbols (`|`) to varying widths.  Without modifying the content of these posts, I took the liberty of redoing their markup using HTML 5 techniques including the same `<progress>` tag that I was using for the tracking gauge I had put up for tracking migration of the site.

I also have corrected numerous spelling errors and other grammatical mistakes that I found highly embarrassing, again without altering the meaning or content of the posts.

There are numerous posts I found embarrassing, but rather than erase the past, I found it important to keep embarrassing content intact, only correcting spelling and grammar errors where necessary.

### Tracking Migration
I've been doing this migration slowly over the last 2 weeks.  Rather than wait for it to be complete, I put it up on nickmoline.com while leaving nick.pro operational, and put a status gauge on the home page indicating how much of the site had been migrated.  To prevent having to change this over and over manually, I did some simple trickery using Jekyll collections to [automate the gauge during Jekyll Builds]({% post_url 2020-08-21-automating-progress-bar-in-jekyll %}).  Be sure to check out [the post]({% post_url 2020-08-21-automating-progress-bar-in-jekyll %}) for more on how I did this as well as to see what the gauge displayed over that time.

{% include migration-progress.html %}

## Much to do
I still have much to do.  I've been debating on if I want to add retroactive posts or not to link to content that I never posted on my blog but did post in other places such as [Justia's Blog](https://onward.justia.com/author/nickmoline/), [The Harry Potter Lexicon](https://www.hp-lexicon.org/author/nickmoline/), or [Sunnyvale Community Players](https://sunnyvaleplayers.org/author/nickmoline/) but never bothered to post about on my own blog.  As well as events that had a huge impact on my life but I never posted about such as the various plays I have worked on or some of the conferences I've attended.

At the moment I'm leaning towards writing those retroactive posts, or at least some of them, but I haven't done so yet.  And of course I intend on publishing lots of posts here in the future, especially on some of my more nerdy projects that I've been working on.

I also want to spend some more time better organizing the [Categories]({{ site.baseurl }}/categories/) and [Tags]({{ site.baseurl }}/tags/) a bit as there are more categories than I'd like and there are places where there are multiple tags with the same meaning but without the same posts.  These tasks will come.

But in the mean time **Welcome to NickMoline.com**, I'm very glad to have you here.