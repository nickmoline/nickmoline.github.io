---
extends: _layouts.post
section: content
title: That Time I Made a Harpy
subtitle: Creating Real Time Visual Effects
date: 2021-03-04 11:00:00
permalink: /2021/03/15/making-a-harpy/
dsq_thread_id: 202103151057
cover: /assets/images/2021/03/harpy.png
coverp: /assets/images/2021/03/harpy.webp
excerpt: "For the latest show I've worked on, I had an unusual new challenge, could I turn someone into a Harpy in real time?  How about turning a woman into a rainbow?"
categories:
    - Theatre
    - Learning
tags:
    - Visual Effects
    - The Tempest
---
In my [last post]({{ $page->postLink("2021-03-04-learning-behind-the-stage") }}), I mentioned that with each show I work on, I like to learn something new.  I teased that I had some very unique challenges on this latest show _The Tempest_.  In particular I needed to create a number of real-time visual effects.  I used a variety of tools to accomplish this task.

_The Tempest_ is a show that is known for involving quite a lot of spectacle and translating that spectacle to a real-time production over zoom was always going to be a challenge.  In this post I'll break down a few of these effects including the tools I used to make them.

## The Harpy
In _The Tempest_, there is a scene where the spirit Ariel appears in the form of a harpy in order to frighten and shame the king and his party for what they did to Prospero in the past (_spoiler alert for a 410 year old play_).  In the scenes immediately prior and following this, Ariel appears not as a harpy but as their normal spirit self.  

On a stage this would require a costume quick-change into and out of a pretty significant costume that often needs the assistance of dressers to assist the actor.  With us all in quarantine, there was no dresser near the actor who played Ariel in order to allow for such an elaborate costume change.  The director (Pat Nims, the creator of [Zoom Theatre](https://zoomtheatre.com)) suggested that we could use [Snap Camera](https://snapcamera.snapchat.com/) (a desktop application by Snapchat that lets you use snapchat filters with your webcam) to essentially create a virtual costume for Ariel as a harpy.

Unfortunately I couldn't find a snapchat filter that would accomplish this task among the thousands of snapchat filters available.  When something doesn't exist... make it yourself.  Snapchat also has an application called [Lens Studio](https://lensstudio.snapchat.com/) that allows you to create your own snapchat filters which can then be published.

It was difficult, as it involved mapping 2 dimensional images into a 3 dimensional AR mesh of the human face and shoulders, but the end result was fantastic.  In order to make the filter usable, I had to actually publish it to snapchat's library of filters, which means if you would like, you can become a harpy either in snapchat on your phone or in lens studio yourself using the filter I made for this production.

<a href="https://www.snapchat.com/unlock/?type=SNAPCODE&uuid=b221e35242564672a10561598efd1a1e&metadata=01"><amp-img src="{{ site.baseurl }}/assets/images/2021/03/harpy-snapcode.svg" alt="Become a Harpy" width="320" height="320" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2021/03/harpy-snapcode.png" alt="Become a Harpy" width="320" height="320" layout="responsive"></amp-img>
</amp-img></a>

Snap the snapcode above on your phone to use it on your phone, or copy [this url](https://www.snapchat.com/unlock/?type=SNAPCODE&uuid=b221e35242564672a10561598efd1a1e&metadata=01) and paste it into the search box in Snap Camera to use it on your computer webcam.

## Flying Between Windows
Zoom Theatre makes use of zoom's gallery view and the feature of multi-spotlighting to arrange which user appears on which part of the screen.  We then use zoom's background image feature to slice up a background image so that the various windows connect together to appear as one large image, helping to sell the idea that these actors are all together in the same space.

There is a scene where 3 roman goddesses appear to bless the impending nuptuals of the romantic leads of the show.  The director wanted 2 of these goddesses to appear "in the sky" and then "descend" down to earth during the scene.  What he wanted is for these godddesses to appear in one part of the screen, and then move to another part of the screen (basically move between zoom windows)

To accomplish this, we doubled up the computers at the 2 actors location.  They had 2 different computers connected to the same zoom call allowing us to pin the actor to essentially be in 2 places at once.  We then used [OBS Studio](https://obsproject.com/) to create a virtual webcam on both computers that would allow us to control the positioning of the camera in both spaces and animate the movement between them.  On one of the computers I had the actor appear at the top of the scene (camera on dead center), on the other the actor doesn't appear (nothing but a green background which could then be chroma keyed out).

I then created a transition animation between 2 "scenes" (OBS Terminology) where on the top the camera image would be animated to descend out of the frame, and on the other the camera would descend into the frame.  With techs on both computers ready to hit the animation simultaneously, we were able to create an effective transition where the goddess Iris would descend from the sky on the top left of the overall image, and into the ground view on the bottom left.  A short while later, the goddess Juno would descend from the top right to the bottom right.  When timed correctly this effect worked very well.

Without the use of OBS, we did a similar effect earlier in the show where we had 2 cameras on 2 computers aimed low and high, so an actor laying down could stand up causing their torso to appear on the top row of windows and their legs to appear on the bottom row.

The effects were impressive and really helped build a virtual "stage" that the audience could suspend disbelief to feel like actors were really sharing the stage together.

## The Goddesses Show Their Powers
Those same goddesses I mentioned earlier (along with a third goddess, Ceres) also needed another effect (a unique one for each of them) to help make them stand out in their big dance number.

<amp-img src="{{ site.baseurl }}/assets/images/2021/03/goddesses.webp" alt="The Goddesses" width="3140" height="1804" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2021/03/goddesses.png" alt="Become a Harpy" width="3140" height="1804" layout="responsive"></amp-img>
</amp-img>

Each of these effects is unique and I accomplished them in different ways

### Iris, Goddess of the Rainbow
In both Greek and Roman mythology, Iris is the goddess of the rainbow.  For Iris I thought it might be interesting to create chromatic tinted ghost images that follow her movement.  To do this I used OBS again.  I duplicated the camera into 5 copies, with different filters on each virtual copy.

I then layered these cameras (Each with chroma keying out) on top of each other to create the effect.  From top to bottom:

1. The top layer is just the camera itself, in full color, with the background chroma-keyed out.
2. The next layer down is the same, except for 2 extra filters.  First I tinted the image red using color correction, and then made the image slightly transparent.  I then also put a small delay (100 miliseconds) so that when the top layer moves, the next layer would move a tenth of a second later.
3. The next layer down is the same as above, except the delay is increased to 200 miliseconds and the color correction tints the image yellow instead of red.
4. The next layer down is the same as above, except the delay is increased to 300 miliseconds and the color correction tints the image blue instead of red or yellow.
5. Finally the original camera image (without any corrections or even chroma keying) is placed on the background.  This allows the transparent colored layers to appear over the top of the background without issues.

The ending effect makes it when Iris moves, there is a rainbow following her movement behind her.  I'm personally very happy with this effect as it is really unique.  It is possible to accomplish the same effect using snap filters, but it would require quite a bit of work and I was unable to get it to look as good in snap camera as I could in OBS in time for the show to open.

### Juno, Queen of the Gods
Juno was difficult, she's the queen of the Roman pantheon, but isn't really associated with something that is an easy imagery like the rainbow for Iris.  I decided to simply give her an aura, specifically a purple aura, causing her to "glow" with purple regal light, kind of like the auras Disney used to represent most of the Greek pantheon in the animated _Hercules_ movie.

This purple aura I accomplished by creating yet another snap filter in Lens Studio where I used masking layers to create a glow, which I simply tinted purple.  This is a relatively simple filter, but I found it surprisingly difficult to get right where the aura would follow the actress without bleeding too much.  I spent a lot of time tweaking and improving the filter until I had the effect right.

Here is a screenshot of testing the filter on myself while I was working on it:

<amp-img src="{{ site.baseurl }}/assets/images/2021/03/nick-glowing.webp" alt="Nick is Glowing" width="1418" height="786" layout="responsive" lightbox>
    <amp-img fallback src="{{ site.baseurl }}/assets/images/2021/03/nick-glowing.png" alt="Nick is Glowing" width="1418" height="785" layout="responsive"></amp-img>
</amp-img>

Since I had to publish this filter as well, if you are interested in turning yourself purple [you can](https://www.snapchat.com/unlock/?type=SNAPCODE&uuid=0628b20fcfed427a8a0f5fed6b87819c&metadata=01)!

### Ceres, Goddess of Agriculture
Ceres is the Roman aspect of the Greek Goddess Demeter, the goddess of agriculture, grain crops, fertility and motherly relationships.

I had a hard time coming up with an effect for this one, but in the end I happened across a snap filter that someone else created.  Someone who goes by Virtuose Reality created a [snap filter](https://www.snapchat.com/unlock/?type=SNAPCODE&uuid=34225a140f534044918282fa5a9445bb&metadata=01) where after a few moments a crown made of vines grows around the head of the wearer, then flowers bloom, and finally a hummingbird starts flying around drinking from the flowers.  This a seriously impressive filter, that I can't take ANY credit for.  [Try it out](https://www.snapchat.com/unlock/?type=SNAPCODE&uuid=34225a140f534044918282fa5a9445bb&metadata=01), it's really cool, and worked fantastically for the Goddess of Agriculture.

## Other Visual Effects
There are other effects in the show, including some devil dogs which was created with [another filter I found](https://www.snapchat.com/unlock/?type=SNAPCODE&uuid=2eda6d9adcc3428a8bd5e9d0d75038f9&metadata=01) that puts a dog head shaped helmet on top of your head.

We considered using a red eye effect on Caliban, but in the end we decided not to bother with it as it would make camera changes more difficult.

Some other effects were accomplished by using video files that Pat created as the backgrounds, which I can't take any credit for.

## Sound Design

This show also had a ton of sound effects to work with, many of which required layering different sounds on top of each other.

One thing I did in this show that I don't often have to do is create background audio "loops."  For those that don't know creating an audio loop is a technique of making sure the end of the audio file matches up perfectly with the beginning of the audio file so that the sound could loop continuously without anybody noticing it.

Pat wanted to make sure that the magic storm that shipwrecked people on Prospero's island was always "present" which I accomplished by creating a number of long audio loops that could play in the background quietly without people noticing how much they were repeating.  A few well placed thunderclaps over the top of that audio loop helped also distract people from noticing the 10 minute audio loops as being loops.

## Zoom on Remote Control
Finally one more thing that Zoom Theatre did with this show that they had not previously done, is use a new custom zoom client by [Liminal Entertainment Technologies](https://www.liminalet.com/) called [ZoomOSC](https://www.liminalet.com/zoomosc)

[Open Sound Control (OSC)](https://en.wikipedia.org/wiki/Open_Sound_Control) is a text based network protocol designed back in 2002 to allow for remote control of synthesizers and other equipment during a show.

ZoomOSC is a custom created zoom client that listens for these commands from a show controller, and both relays the commands through Zoom's chat feature to copies of ZoomOSC running on other computers as well as doing a number of things in response to these commands.

It took some trickery to get to work properly, but in the end this allowed [QLab](https://qlab.app/), the software I've long used for cueing up sound and video effects in theatre, to control not only my own zoom client, but the zoom clients of the actors.  I could use it to spotlight different participants at different times so that whenever a scene is supposed to change, I could bring up the appropriate actors for each scene.

The software is quite powerful, it could be used to command each person's zoom client to change cameras and backgrounds automatically as well as controlling muting and unmuting of audio throughout the show.

As it was the first time Zoom Theatre used this software for a show, we started simple, with just using the software to control spotlighting, relying on Zoom Theatre's tried and true methods of having crew members remoting into actor computers to handle everything else.

## What a Show
If you managed to see _The Tempest_, you know it was an impressive undertaking that you don't normally see in live theatre productions done over zoom, and hopefully you now have an appreciation of the work that was put into the show.  

The above is just the things that I was involved with, but we also had a music director create original musical compositions for the show, a costumer costuming people without ever seeing them to take measurements, shipping clothes to the actors.  

We had a props master sending props to the actors, in some cases sending duplicates of the same props to multiple actors so that they could "hand off" a prop between zoom windows.

And we had someone create original hand-painted backgrounds for every location in the show.  All of this work by many people came together to create a unique show experience that was a true joy to be a part of.
