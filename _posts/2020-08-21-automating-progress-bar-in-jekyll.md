---
title: Automating the site migration progress bar in Jekyll
permalink: /2020/08/21/automating-progress-bar-in-jekyll/
cover: /assets/images/2020/08/21/status-bar-header-image.png
coverp: /assets/images/2020/08/21/status-bar-header-image.webp
categories:
    - Tech
tags:
    - Coding
    - Jekyll
    - Liquid
    - HTML5
    - Guides
amp-gist: true
---
As I mentioned yesterday [I'm moving posts over to Jekyll]({% post_url 2020-08-20-migrating-to-jekyll %}) from my WordPress blog.  To get started, I used a wordpress plugin called simply [Jekyll Exporter](https://wordpress.org/plugins/jekyll-exporter/) to export all of my posts and pages into markdown files.  This worked pretty well, but since I want my site to be 100% [AMP](https://amp.dev) Only, I decided that rather than just publishing them all I should make sure that none of the old markup (much of which has been migrated between 3 different platforms) ends up causing pages not to validate in the AMP Validator.

<!--more-->

I decided not to wait till I had converted all 212 pages to go live at nickmoline.com, but in the vein of old Under Construction pages of the 90s I decided it would be neat to display a progress bar on how much of the backlog I've worked my way through.

{% include migration-progress.html %}

What's cool about this bar (which is shows up not only here, but also on the home page and in the previous blog post) is that it is being generated entirely dynamically from my jekyll repo.  I thought it would be interesting to explain how I got my repo to generate this dynamically in this post.

### Determining what is done
Jekyll has a global array called `site.posts` which contains everything necessary to loop through all of the posts on the site.  In the [Liquid Template Language](https://shopify.github.io/liquid/) (the templating engine [Jekyll uses](https://jekyllrb.com/docs/liquid/)), you can use `.size` to determine how many elements are in an array, including this list of posts.

This way I'm able to determine how many posts have been written.

#### Determining what is not done
Live posts in Jekyll are stored in a `_posts` folder.  There is also a `_drafts` folder which contains post drafts that you haven't finished yet, but there's a difference between drafts and what I'm doing here.  As such my first goal was to create a [Collection](https://jekyllrb.com/docs/collections/) of the posts that have not been migrated yet.  I moved all of the posts that I had not yet checked for formatting and placed them in a `_pending` folder, i then configured the collection by adding to my collections array in the `_config.yml` file like so:

```yml
collections:
    pending:
        layout: post
```

This now creates a new collection named `pending` which works much the same as the built in `posts`.  The list of pending posts are available in a separate array `site.pending` which I similarly can use `site.pending.size` to get a count of.

#### Calculating Percentage

I can now add the two values together to get a total count of posts both pending and live.

{% raw %}
```liquid
{% assign total_post_count = site.posts.size | plus: site.pending.size | times: 1.0 %}
```
{% endraw %}

Math in Liquid is done with filters, so I take `site.posts.size` and I add with `| plus:` the `site.pending.size` to get a total count.  You'll notice I then multiply this by `1.0`.  The reason I do this is to make sure the `total_post_count` variable is a floating point number, rather than an integer.

To get the percentage, I can then divide `site.posts.size` by `total_post_count`.

{% raw %}
```liquid
{% assign migration_percentage = site.posts.size | divided_by: total_post_count | times: 100 | round: 2 %}
```
{% endraw %}

For presentation's sake I'm then multiplying by 100 and then rounding to 2 significant digits.  At this point I have all of the numbers I need.  I know how many published posts there are (currently <strong>{{ posts_migrated_count | floor }}</strong>), how many posts are pending migration (<strong>{{ site.pending.size }}</strong>), how many posts there are total (<strong>{{ total_post_count | floor }}</strong>), and what percentage of the total posts are done (<strong>{{ migration_percentage }}%</strong>).

### Rendering the progress bar

The progress bar itself I'm rendering using the [HTML5 tag progress element](https://www.w3.org/TR/html5-author/the-progress-element.html) which is specifically designed for rendering this.

{% raw %}
```liquid
<progress 
    max="{{ total_post_count | floor }}" 
    value="{{ site.posts.size }}" 
    title="{{ migration_percentage }}% migrated"
    ></progress>
```
{% endraw %}

I could have set `max` to `100` and used the `migration_percentage` as the `value`, but I thought using the actual values would make for a more accurate status bar as it would be calculated with a higher precision than I want to display.  I then set a title attribute so that when you hover over the progress bar you see the percentage.

For styling the progress bar, I followed the [fantastic guide posted at css-tricks](https://css-tricks.com/html5-progress-element/) by [Panjak Parashar](http://pankajparashar.com/) and then tweaked things a bit to my personal liking.

So that I can easily include this in multiple places, I stored all of this in an include file named migration-progress.html so that I could include it in multiple places (such as the [home page]({{ site.url }}) and [my previous blog post]({% post_url 2020-08-20-migrating-to-jekyll %})) and future tweaks could be shown in multiple places.

### Putting it all together
<amp-gist
    data-gistid="2744c66ccd46224b7c6e3a8196d73a30"
    layout="fixed-height"
    height="225"></amp-gist>

### Dealing with future posts

At this point some of you may have noticed a flaw in the above that this post actually exacerbates, it counts new posts as migrated posts.  The more I blog before the files are published, the more the numbers will be incorrect.  To solve this, when I finished I simply replaced the calculation making the total a fixed number (212) and calculating the number published as the total minus what is left in the pending folder.

Here is the final modified version to take this into consideration.

{% raw %}
```liquid
{% assign total_post_count = 212.0 %}
{% assign posts_migrated_count = total_post_count | minus: site.pending.size %}
{% assign migration_percentage = posts_migrated_count | divided_by: total_post_count | times: 100 | round: 2 %}
<progress max="{{ total_post_count | floor }}" 
    value="{{ posts_migrated_count }}" 
    title="{{ migration_percentage }}% migrated"></progress>
Migrated <strong>{{ posts_migrated_count | floor }}</strong> 
out of <strong>{{ total_post_count | floor }}</strong> posts migrated (<strong>{{ migration_percentage }}%</strong>).  
<strong>{{ site.pending.size }}</strong> posts remaining to migrate.
```
{% endraw %}