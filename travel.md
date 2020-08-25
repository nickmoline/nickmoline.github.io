---
title: Nick Moline's Travel Maps
layout: page
permalink: /travel.html
date: 2020-08-23T20:11:00-07:00
amp-carousel: true
---

Every so often I update a map showing all of the places where I've traveled.  The maps on this page are current as of <time datetime="{{ page.date | date_to_xmlschema }}">{{ page.date | date:"%B %-d, %Y" }}</time>

<amp-carousel lightbox width="6600" height="6502" layout="responsive" type="slides">
    <amp-img src="{{ site.baseurl }}/assets/images/travelmap/map-states.webp" width="5175" height="3762" layout="responsive">
        <amp-img fallback src="{{ site.baseurl }}/assets/images/travelmap/map-states.png" width="5175" height="3762" layout="responsive"></amp-img>
    </amp-img>
    <amp-img src="{{ site.baseurl }}/assets/images/travelmap/map-countries.png" width="6460" height="3480" layout="responsive">
        <amp-img fallback src="{{ site.baseurl }}/assets/images/travelmap/map-countries.png" width="6460" height="3480" layout="responsive"></amp-img>
    </amp-img>
    <amp-img src="{{ site.baseurl }}/assets/images/travelmap/map-northamerica.png" width="6600" height="6502" layout="responsive">
        <amp-img fallback src="{{ site.baseurl }}/assets/images/travelmap/map-northamerica.png" width="6600" height="6502" layout="responsive"></amp-img>
    </amp-img>
    <amp-img src="{{ site.baseurl }}/assets/images/travelmap/map-places.png" width="6460" height="3480" layout="responsive">
        <amp-img fallback src="{{ site.baseurl }}/assets/images/travelmap/map-places.png" width="6460" height="3480" layout="responsive"></amp-img>
    </amp-img>
</amp-carousel>

Maps Generated at [mapchart.net](https://mapchart.net/)