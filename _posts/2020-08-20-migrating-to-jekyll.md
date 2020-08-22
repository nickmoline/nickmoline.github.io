---
title: Migrating my blog and personal site to Jekyll
cover: /assets/images/2020/08/20/wordpress-to-jekyll.jpg
categories:
    - Web
tags:
    - Jekyll
    - GitHub
    - WordPress
    - Markdown
---
After several years of using [Wordpress](https://www.wordpress.org) as my blogging platform of choice, I've made the decision to move my personal site to [Jekyll static site generator](https://jekyllrb.com).

<!--more-->

## Why I'm doing this

### Super Fast
As I've blogged about on Justia's Legal Marketing & Technology Blog several times, [web performance matters](https://onward.justia.com/2017/07/05/page-speed-tips-and-tools/).  47% of users expect a web page to load in under 2 seconds, and 40% of users will abandon a page that takes longer than 3 seconds to load.

WordPress is a fantastic blogging platform, and it is possible using a combination of best practices, extensive hosting infrastructure, and plugins such as [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/) to make WordPress pages perform very well.  But nothing is faster than serving static files that require no server side code to view.

While I know quite a bit about optimizing WordPress, having done it for years, I've never bothered to spend any significant time optimizing this blog, and frankly it is not the best use of my time to do so.

### Infrastructure Light
I mentioned that part of making a WordPress powered site perform optimally is having the server infrastructure in place to handle the demand.  This means a web server with plenty of CPU available for the code, and a MySQL server with plenty of CPU and Ram to handle requests quickly.  You then also have to be careful not to weigh your blog down with too many plugins that may impact performance.

For my own personal site, which doesn't make money, investing in this infrastructure to keep this site performing optimally would not be an efficient use of my money.

GitHub offers a free service called [GitHub Pages](https://pages.github.com/) which can host free static html sites on their servers.  While I've never had a problem running my own server (and still do for advanced projects), for my blog in particular I'd love to not have to worry about maintaining the server.  Since the output from jekyll is static html pages, the limitations of GitHub Pages (basically no server side code or database) are not a problem and it can handle this easily.

What's more is that GitHub pages supports jekyll natively, meaning that while I _can_ serve Jekyll pages anywhere on any web server, I don't even have to run the builder to process the files when hosting them on GitHub Pages.

### Coder Friendly
As a coder I'm comfortable working in [Markdown](http://daringfireball.net/projects/markdown/), especially the derivitive known as [GitHub Flavored Markdown](https://github.github.com/gfm/) which adds a number of coder friendly improvements over the top of the [CommonMark spec](https://spec.commonmark.org/current/).

As Jekyll sites are built from a markdown base (by default, you can also use plugins to build from other markup languages or just use plain html files) I'm able to author posts very quickly.

GitHub Pages and <abbr title="GitHub Flavored Markdown">GFM</abbr> allows me to integrate features from GitHub into my pages very simply.  For example I can easily [embed a gist](https://gist.github.com/) in a page with a simple tag.  And I can insert code into my pages with syntax hilighting that matches the syntax hilighting on GitHub.  As like many developers I host my code repositories on GitHub, this makes it very easy to blog about my coding exploits.

Another interesting feature of GitHub Pages is that I can [host documentation pages for my own GitHub hosted projects](https://docs.github.com/en/github/working-with-github-pages/using-submodules-with-github-pages) by using Git Submodules to embed the other github hosted repo in a subfolder of this.  As I work on more open source projects I intend on hosting my documentation on this site using this feature.

### Version Controlled Site
I love the idea of version controlling my live site, it allows me to see my edits over time.  This blog is now hosted on a [public repo](https://github.com/nickmoline/nickmoline.github.io) on my GitHub account @nickmoline.

This makes it very easy to track what changes I've made over time, both to the layout of the site and even the content of individual pages.  It allows me all of the power of the [Git](https://git-scm.com/) Version Control System over my own content.

## I still love WordPress
I've thought about doing this many times over the years.  What held me back is that I happen to love WordPress.  I'm not alone in this, as of the time I'm writing this, [38.1% of all websites are hosted on WordPress](https://w3techs.com/technologies/details/cm-wordpress) accounting for 63.5% of websites hosted by a known <abbr title="Content Management System">CMS</abbr> according to W3techs.  When over a third of all websites in the world are powered by WordPress, there is a good reason for that.  WordPress is extremely flexible allowing you to host any type of website from a blog like this one to a fully fledged eCommerce site using freely available plugins to add functionality needed for a particular site.

I still use WordPress in a number of projects both for work and for personal side projects such as [The Harry Potter Lexicon](https://www.hp-lexicon.org/) and the website for [Sunnyvale Community Players](https://sunnyvaleplayers.org).

## Migration Progress
Rather than dump all of the posts at once, I'm taking the time to go through the posts and fix the formatting to match the new layout.  For your amusement, here is the migration progress statistics:

{% include migration-progress.html %}