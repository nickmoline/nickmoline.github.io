---
title: Monitoring Weather Conditions With the Ambient Weather WS-2902C
permalink: /2020/10/26/weather-tracking/
dsq_thread_id: 202010261942
cover: /assets/images/2020/10/weather/weatherstation-cropped.jpg
coverp: /assets/images/2020/10/weather/weatherstation-cropped.webp
excerpt: "As some people in my city are being evacuated due to encroaching fires, I finally setup my weather station to track the weather and air quality."
categories:
    - Life
tags:
    - Moving
    - Weather
    - Fire
---
**I don't normally put a `TL;DR` in my blog posts, but I do feel the need to preface the beginning of this post by saying, while Irvine, CA is currently under Evacuation Orders, the Evacuation Order does not include my part of Irvine, we are currently safe, though the air quality is a bit poor.  I'll be sure to update social media if we end up being evacuated.**

-----

I've long been fascinated by personal weather stations, and long wanted one of my own so I can track weather conditions at my exact location.  The last couple of years I've been particularly interested in tracking the [Air Quality Index (AQI)](https://en.wikipedia.org/wiki/Air_quality_index) along with other weather data. The reason for this was the annual wildfires that impact the air quality in the SF bay area (and other areas of the west coast).

A couple of months ago, on a day the AQI in Sunnyvale was particularly bad (everything outside was tinted orange), I went ahead and purchased the [WS-2902C](https://ambientweather.com/amws2902.html) along with the optional addon units for measuring the PM2.5 Air Quality (one of the main factors that the AQI is calculated from) both inside and outside my apartment.  I went with the Ambient Weather unit for a number of reasons.  Of course having those Air Quality sensors were a big part of it, but I also was interested in being able to track weather online.  The Ambient Weather unit had the extra interesting improvements of integration with both IFTTT and Google Assistant, which fits into my smarthome setup quite well.

By the time my unit arrived however the air quality was marginally better, and more importantly it was looking more and more likely that I was going to end up moving out of the bay area ([I did]({% post_url 2020-10-04-the-next-adventure %})) so I didn't set it up.

I haven't been in Irvine an entire month yet (heck I haven't even reached 2 weeks yet) and now there are evacuations in this very city because of wildfires down here.  At the moment my new home (shown below as the blue dot) is not yet under evacuation orders (or an evacuation warning), but the smoke is in the air and the air quality is once again bad.

<amp-img src="{{ site.baseurl }}/assets/images/2020/10/weather/fire-evacuations.webp" alt="Map of Fire Evacuations in Irvine" width="1355" height="1252" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2020/10/weather/fire-evacuations.png" alt="Map of Fire Evacuations in Irvine" width="1355" height="1252" layout="responsive"></amp-img>
</amp-img>

Since the air quality was bad again, the time was right to finally crack open the box and setup our new weather station.  While it looked complicated, assembly was fairly simple and I now have a fully functional internet connected weather station on my patio.  

## The Unit and my Setup
On the patio I have the Osprey Sensor array which includes a weather vane, speed cups, an Ambient/UV Light sensor, a Thermo-Hygrometer, and a rain gauge.  The unit is primarily powered by a solar panel on the top of the unit, with 2 AA batteries to provide backup power if not enough solar energy is collected in a given day.  The unit transmits via RF (at 915 MHz) to a console located inside the apartment.  

<amp-img src="{{ site.baseurl }}/assets/images/2020/10/weather/PXL_20201027_064916207.NIGHT.webp" alt="The Weather Unit on my patio, yes there is construction outside, great view" width="4032" height="3024" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2020/10/weather/PXL_20201027_064916207.NIGHT.jpg" alt="The Weather Unit on my patio, yes there is construction outside, great view" width="4032" height="3024" layout="responsive"></amp-img>
</amp-img>

Also on the patio is a separate solar powered unit which is the Outdoor version of the PM2.5 Particulate Monitor, which also communicates with the console inside via 915 MHz RF.

<amp-img src="{{ site.baseurl }}/assets/images/2020/10/weather/PXL_20201027_064931760.NIGHT.webp" alt="Air Quality Sensor PM 2.5" width="4032" height="3024" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2020/10/weather/PXL_20201027_064931760.NIGHT.jpg" alt="Air Quality Sensor PM 2.5" width="4032" height="3024" layout="responsive"></amp-img>
</amp-img>

Inside the apartment is the centralized console.  The console contains an LED display unit.  Note when I say it is an LED, it is not a video screen.  The individual LEDs light up like a traditional LCD calculator (but lit) and each LED can only light a particular area of the display.  On the display are readouts for Wind Speed and Direction, Rainfall, Outdoor Temperature and Humidity, Time and Date, Moon Phase, Barometric Pressure, a Weather Forecaast, Solar Radiation, and the UV Index.  There is also a display for the Indoor temperature and Humidity which comes from another Thermo-Hygrometer sensor located in the console itself.

<amp-img src="{{ site.baseurl }}/assets/images/2020/10/weather/PXL_20201027_065019498.webp" alt="The Main Console Display" width="4032" height="3024" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2020/10/weather/PXL_20201027_065019498.jpg" alt="The Main Console Display" width="4032" height="3024" layout="responsive"></amp-img>
</amp-img>

In addition to the 915 MHz RF receiver that receives communications from the other devices, this also contains a 2.4 GHz WiFi radio inside which is used to connect to your home WiFi connection for transmitting the data to the internet.  You'll note I did not mention anything on the display that mentioned displaying the PM2.5 Particulate Monitor data, this data is only available on the internet dashboards and mobile app.

<amp-img src="{{ site.baseurl }}/assets/images/2020/10/weather/Screenshot_20201027-001612.webp" alt="Viewing Air Quality on the Mobile App" width="1080" height="2160" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2020/10/weather/Screenshot_20201027-001612.png" alt="Viewing Air Quality on the Mobile App" width="1080" height="2160" layout="responsive"></amp-img>
</amp-img>

The unit can also receive from a second PM2.5 Particulate Monitor unit, which instead of being powered by solar is powered by a USB charger.  This is for monitoring the air quality inside the apartment, we placed this unit in our bedroom to get an indication of what the air quality is where Barbara will be spending most of her time.  The console can also receive from (and upload) data from up to 8 additional Thermo-Hygrometers.  We placed one of these in our bedroom to sense the temperature and humidity in our room, as well as another one in Joey's (Barbara's Brother) room.  

We need to purchase a 3rd to put into Dorothy's (Barbara's Mom) room to finish out the sensing in the apartment, but as I mentioned we purchased this in our old home where we only had 2 bedrooms so we only purchased 2 of them.  We'll pick up an additional 1 (or possibly a few) to monitor other rooms. It would be interesting to monitor temperature and humidity in the bathrooms as I'm sure the humidity spikes whenever someone takes a shower.

With everything setup, I can now access my data in a variety of places.  The unit's native home is [Ambient Weather's own weather data service](https://ambientweather.net/dashboard/435a5c93160dc349b6a8f4b1cc27f054) which works very well, but you can also set the unit up to upload directly to [Weather Underground](https://www.wunderground.com/dashboard/pws/KCAIRVIN182) or [Weathercloud](https://app.weathercloud.net/d2434962961#profile).  You aren't limited to one of these services either, those links are links to the public versions of the weather data from my weather station on all 3 services.

<amp-img src="{{ site.baseurl }}/assets/images/2020/10/weather/dashboard.webp" alt="Web Based Dashboard" width="1727" height="1444" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2020/10/weather/dashboard.png" alt="Web Based Dashboard" width="1727" height="1444" layout="responsive"></amp-img>
</amp-img>

From Ambient Weather you can also integrate with a number of other 3rd party services.  The first is PWS Weather which doesn't have as nice of an interface as any of the direct services, but what is nice is the ability to easily download a CSV log of the data, there's no public view of this one that I can find so no link here.  If you don't want to have your unit upload to Weather Underground directly, you can also just upload to Ambient Weather and have them integrate with Weather Underground from their service.

The more exciting integrations from Ambient Weather's service is that it can integrate with Alexa, Google Assistant, and IFTTT.  I will surely be setting up some interesting integrations from IFTTT to automate things based on my weather data (for example flashing my smart lights red if the air quality gets particularly bad).  I could eventually do some automation with other pieces of equipment, for example I can turn on a humidifier if the humidity drops too low (or a dehumidifier if it gets too high), or an air filter whenever the air quality reaches certain thresholds.  

As for Google Assistant, at this point the integration is a little limited, but it is nice to be able to ask a Google Home for one or more of the pieces of live weather data from my weather station.  I hope this integration will become more robust over time as I'd love to be able to replace standard internet data with my localized data, or integrate this data in routines.

--------

**I'll wrap this post by saying, if you are in an area that is being ravaged by wildfire, my thoughts and prayers are with you and your families.**