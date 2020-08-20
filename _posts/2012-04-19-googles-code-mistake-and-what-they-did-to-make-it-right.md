---
id: 651
title: 'Google&#8217;s Code Mistake, and what they did to make it right'
date: 2012-04-19T17:37:29-07:00
author: nickmoline
layout: post
guid: http://www.nick.pro/?p=651
permalink: /2012/04/19/googles-code-mistake-and-what-they-did-to-make-it-right/
dsq_thread_id:
  - "656832329"
  - "656832329"
Views:
  - "10"
  - "10"
readability_ARI:
  - "7.4"
  - "7.4"
readability_CLI:
  - "6.3"
  - "6.3"
readability_LIX:
  - "27.9"
  - "27.9"
word_stats_word_count:
  - "937"
  - "937"
word_stats_keywords:
  - 's:419:"a:24:{s:6:"google";i:12;s:11:"competition";i:6;s:4:"same";i:3;s:4:"code";i:7;s:11:"programmers";i:3;s:4:"like";i:7;s:7:"problem";i:6;s:6:"submit";i:4;s:6:"sample";i:4;s:4:"data";i:3;s:6:"output";i:3;s:7:"correct";i:5;s:6:"answer";i:4;s:7:"designs";i:3;s:7:"statues";i:6;s:4:"want";i:6;s:6:"number";i:3;s:4:"case";i:3;s:9:"following";i:3;s:4:"test";i:4;s:5:"least";i:5;s:6:"return";i:4;s:4:"made";i:3;s:7:"mistake";i:3;}";'
  - 's:419:"a:24:{s:6:"google";i:12;s:11:"competition";i:6;s:4:"same";i:3;s:4:"code";i:7;s:11:"programmers";i:3;s:4:"like";i:7;s:7:"problem";i:6;s:6:"submit";i:4;s:6:"sample";i:4;s:4:"data";i:3;s:6:"output";i:3;s:7:"correct";i:5;s:6:"answer";i:4;s:7:"designs";i:3;s:7:"statues";i:6;s:4:"want";i:6;s:6:"number";i:3;s:4:"case";i:3;s:9:"following";i:3;s:4:"test";i:4;s:5:"least";i:5;s:6:"return";i:4;s:4:"made";i:3;s:7:"mistake";i:3;}";'
word_stats_cached:
  - "1"
  - "1"
categories:
  - Events
  - Google
  - Tech
---
[<img class="alignright size-medium wp-image-653" title="Google I/O" alt="Google I/O" src="https://i2.wp.com/www.nick.pro/wp-content/uploads/2012/04/Region-capture-15-300x151.png?resize=300%2C151&#038;ssl=1" width="300" height="151" data-recalc-dims="1" />](https://developers.google.com/events/io/)This morning Google <a href="http://googledevelopers.blogspot.com/2012/04/code-jams-sprint-to-google-io.html" target="_blank">opened up a programming competition</a> using the same system as Google Code Jam (they called it the Google Code Jam Sprint to I/O) to win the right to buy 1 of 100 tickets to Google I/O.  Normal Registration for the conference closed [20 minutes after it opened](https://www.nick.pro/2012/03/27/google-io-sells-out-in-less-than-a-half-hour/ "Google I/O 2012 Sells out in less than a half hour") back on March 27th due to the incredible demand, so naturally those developers who couldn&#8217;t get in before were excited and ready to battle for the chance to buy a ticket.

The competition consisted of 2 problems, programmers could write their code in any language (as long as the compiler is free to use).  It would work like this, you would write a program according to their specifications of the problem, and then you would submit it.  When you submit it, google would provide you with a file of sample input data and then give you 1 minute to run your code against that sample data and then submit the output to them.  They would then run a validator across the output and tell you if you were correct or not.  If you were correct, it would accept your answer, if not, it would reject it.

The first question went like this (paraphrasing)

> The Google Store has `M` new designs of android mini-statues available, and they have `L` of each design in stock.  You, an avid collector and generous gifter, want to buy a certain number of each of these new designs (`K<sub>1</sub>`, `K<sub>2</sub>`&#8230; `K<sub>M</sub>`). The problem is&#8230; the packages for these statues are all exactly the same, and don&#8217;t indicate what is inside, and you cannot open the package before purchasing.  What is the minimum number of packages you need to purchase to guarantee you have all of the statues you want in a worst-case scenario

The sample data was a list of lines in the following format for different test cases:  
`L M K<sub>1</sub> K<sub>2</sub> <em>...</em> K<sub><em>M</em></sub>`

For example:

<pre>5 3 4 2 1
5 3 5 5 5
5 2 1 5
6 4 0 0 0 0
2 4 5 1 2 3
0 3 4 1 2
9 5 1 1 1 1 1</pre>

Taking the first one (They have 5 each of 3 different designs, and you want 4 of the first, 2 of the second, and 1 of the third), the correct answer would be 14 (in order to guarantee you have at least 4 of the first, at least 2 of the second, and at least 1 of the third, you would have to buy enough that you would have ALL of all but 1 of them, and then the highest K for the remainder)  
`Answer = (L * (M-1)) + max(K)`  
The question also said that if it was impossible to get what you want, you should return -1 (like the 5th and 6th examples, you can&#8217;t buy more statues than they had available in the first place)

Now most programmers seeing something like the 4th test case there (6 4 0 0 0 0) would realize that if you don&#8217;t want to buy any of them, than the answer is 0 (minimum number to buy in order to get 0 statues is 0), so the basic pseudo code to solve this problem is:

<pre>function process_test_case(L = 0, M = 0, K = array()) {
     if (max(K) == 0) return 0
     elseif (max(K) &gt; L) return -1
     else return (L * (M - 1)) + max(K)
}</pre>

There is just one problem&#8230; Google&#8217;s developers that came up with this test, didn&#8217;t think about the possibility where you don&#8217;t want any statues (`max(K) == 0`), so if you ran the above code and returned 0 on the sample 4, google&#8217;s validator would come across with &#8220;Incorrect&#8221;, on the other hand if you left that line out and only did the other 2 possibilities, it would say you were &#8220;correct&#8221;

Naturally a lot of the programmers who entered the competition were quite upset about this, and complained to Google <a href="https://plus.google.com/111395306401981598462/posts/LmdU3TvNVrs" target="_blank">via comments on the Google+ post</a> that announced the competition.  Eventually google put up the following message saying that they realize they made a mistake:

> We&#8217;ve made a mistake in problem A. The correct output is 0, but it is being judged as wrong because 4 of our problem writers have independently made the same bug in their solutions. We would like to apologize for the confusion this has caused. We will send an email to all participants shortly, announcing our plan to resolve this issue in the least unfair manner possible. We take a lot of precautions to prevent mistakes like this, but we have messed up this time

Now I did not enter this competition (I did the coding example just for the brain exercise, but I did not submit it) because I am [already registered for Google I/O](https://www.nick.pro/2012/03/13/google-io-2012-here-i-come/ "Google I/O 2012 Here I come") and didn&#8217;t need the additional ticket for myself, but some of my coworkers did enter the competition, and they received an email a little while ago which included the following:

> As you know, we intended to provide an opportunity to buy Google I/O tickets to the top 100 scorers. **In light of our mistake, we&#8217;ve decided instead to offer this opportunity to all participants who have submitted any solution to either of the two problems**. Please watch your inbox for a registration code coming shortly.

That does indeed seem &#8220;least unfair,&#8221; everyone who tried the contest, gets to go to Google I/O.  If you are among those, (like my fellow coworkers), I look forward to seeing you in San Francisco on June 27th.