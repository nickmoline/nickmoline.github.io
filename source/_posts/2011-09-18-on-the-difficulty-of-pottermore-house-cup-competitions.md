---
id: 500
title: On the Difficulty of Pottermore House Cup Competitions
date: 2011-09-18 04:13:23
author: nickmoline
extends: _layouts.post
section: content
guid: http://www.nick.pro/?p=500
permalink: /2011/09/18/on-the-difficulty-of-pottermore-house-cup-competitions/
dsq_thread_id: 418118533
categories:
  - Tech
tags:
  - Pottermore
  - Harry Potter
  - Math
---
My last [2]({% post_url 2011-09-14-pottermore-cheats-potions-better-still-needs-more %} "Pottermore Cheats Update: Potions are Better now, but the site still has a way to go") [posts]({% post_url 2011-08-27-pottermore-cheats-earning-more-house-points-through-failure-then-success-in-potion-making %} "Pottermore Cheats: Earning more house points through failure then success in potion making") were both about cheats on earning and keeping House Points on [Pottermore]({{ site.url }}{{ site.baseurl }}/tags#pottermore).  Continuing that series, I thought I would write a little bit on task based point competitions.

<!--more-->

## _&#8220;Now, as I understand it, the house cup here needs awarding, and the points stand thus&#8230;&#8221;_

<div style="float: right;margin-left: 5px;margin-bottom: 5px;border: 1px solid #000;padding: 5px;background-color: #fffdee;width: 270px">
  <table>
    <tr>
      <td align="left">
        4th Place
      </td>
      
      <td>
        Hufflepuff
      </td>
      
      <td align="right">
        39,932 points
      </td>
    </tr>
    
    <tr>
      <td align="left">
        3rd Place
      </td>
      
      <td>
        Gryffindor
      </td>
      
      <td align="right">
        42,056 points
      </td>
    </tr>
    
    <tr>
      <td align="left">
        2nd Place
      </td>
      
      <td>
        Ravenclaw
      </td>
      
      <td align="right">
        44,985 points
      </td>
    </tr>
    
    <tr>
      <td align="left">
        1st Place
      </td>
      
      <td>
        Slytherin
      </td>
      
      <td align="right">
        45,004 points
      </td>
    </tr>
  </table>
</div>

The first problem with the house point championship is in just a month we are dealing with point values in the tens of thousands, when in the books the house cup championship is only in the hundreds after an entire year.  Granted, there&#8217;s just under 400,000 &#8220;students&#8221; on Pottermore, and at best estimates, Hogwarts has at most a thousand (according to a [Scholastic Chat with J.K. Rowling in 2000](http://www.accio-quote.org/articles/2000/1000-scholastic-chat.htm)), and more realistically [approximately 280 students](https://www.hp-lexicon.org/2001/02/07/how-many-students-are-there-at-hogwarts/) (based mathematically on the assumption of more or less 10 students per year per house, based on the [40 students](http://www.pottermore.com/en/book1/chapter11/moment1/the-original-forty) in Harry&#8217;s Year).  

But even with the enormous population growth at Hogwarts since [1998](https://www.hp-lexicon.org/source/the-harry-potter-novels/dh/dh36/) (I guess the wizarding world is producing a lot more magical children now that the Dark Lord is gone, if there are 400,000 students at Hogwarts), house points at Hogwarts are far more likely to normalize out at far lower levels then 40k in a month.

## _&#8220;now that&#8217;s interesting&#8230;. So where shall I put you.&#8221;_

<div style="float: right;margin-left: 5px;margin-bottom: 5px;border: 1px solid #000;padding: 5px;background-color: #fffdee;width: 270px">
  <table>
    <tr>
      <td>
        Gryffindor
      </td>
      
      <td align="right">
        96,959
      </td>
      
      <td align="right">
        24.996%
      </td>
    </tr>
    
    <tr>
      <td>
        Ravenclaw
      </td>
      
      <td align="right">
        97,283
      </td>
      
      <td align="right">
        25.079%
      </td>
    </tr>
    
    <tr>
      <td>
        Hufflepuff
      </td>
      
      <td align="right">
        97,417
      </td>
      
      <td align="right">
        25.114%
      </td>
    </tr>
    
    <tr>
      <td>
        Slytherin
      </td>
      
      <td align="right">
        96,240
      </td>
      
      <td align="right">
        24.810%
      </td>
    </tr>
    
    <tr>
      <td>
        <strong>Total</strong>
      </td>
      
      <td align="right">
        387,899
      </td>
      
      <td>
      </td>
    </tr>
  </table>
</div>

Pottermore is surprisingly balanced actually for the houses actually, considering house selection is supposedly based only on the results of the Hat Quiz, and not on how full the houses are.  I am surprised that the number of students are more or less equal. 97,417 members in the most populous house (Hufflepuff) and 96,240 in the least populous house (surprisingly, to me anyway, Slytherin house), a difference of only 1,177 people, or just 0.3% of the total.  The houses have more or less the same number of people.

Interesting to note that the house with the most students actually has the lowest number of points, and the house with the fewest students is currently winning.  I think this has something to do with the fact that Catastrophically failing at brewing potions (which annoying sometimes happens even if you follow all of the instructions to the letter) loses you 5 house points, while the easiest potion successfully brewing can only earn 3 house points.  Couple with that the fact that the cheat I mentioned a couple weeks ago no longer works for earning house points quickly, and I would expect to see the number of house points actually even out or even start dropping as more people fail then succeed.

## _&#8220;Yes, Yes, well done, Slytherin,&#8221; said Dumbledore. &#8220;However, recent events must be taken into account.&#8221;_

I have a great deal of sympathy for the team developing Pottermore as they attempt to keep the house cup fair.  I have some experience at doing the same thing in that I have developed a similar House Cup championship for the [HogwartsLive](http://www.hogwartslive.com/) text based Role Playing Game.  On HL, I, like I imagine TH_NK, found it very difficult to come up with an algorithm that more or less gives every house an equal shot at winning the house cup.

The difficulty I found was in creating a system that rewards activity, but is not prone to &#8220;gaming the system&#8221; which is hard when points are generated automatically.

The staff of HL debated back and forth on if automated house points should work and how they should work for a long time, many believe that house points should only be given and taken by the staff, others think that staff should be unable to give or take house points as that is unfair to people who don&#8217;t chat.

I&#8217;m not sure we ever got it right, and I&#8217;m not sure Pottermore will ever get it right either, but I sympathize with the team and the enormous task they have.  The fact that the house cup is so close overall and has changed hands several times in recent weeks, is a testament to the fact that they are doing their best.
