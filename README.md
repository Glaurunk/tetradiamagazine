# tetradiamagazine
The custom WordPress theme for the official website of the <a href="https://tetradiamagazine.gr">"Tetradia" magazine</a>

<p>This is my very first project after learning the basics of the Web Stack (HTML,CSS etc). I decided to experiment with Wordpress because it is the most famous CMS and mostly because I didn't have a clue where else to start from!</p>
<p>The task was huge for my none-existant skills. I had to create a digital library for a printed political magazine. That means I had to work with categories, multiple authors, a huge number of footnotes, strict typography, great number of posts, indices etc. First, I tried to modify an existing theme. I failed miserably, lost many hours in the process and needless to say it hurt a lot! Then, I decided to create a wordpress theme from scratch, designed specifically for the needs of my project. It was a nightmare. My eyes bled after hours and hours of reading the documentation and watching youtube tutorials, trying to understand php and get into the mindset of real programmer. I think I've hit each and every restriction and limitation of the Wordpress framework, trying to micromanage every single detail. Needless to say it is not the tool to blame but solemnly my own ignorance.</p>
<p>I had problems with categories, multiple authors, indexing, pagination, links, search, everything. I had to work around these problems using quite unorthodox and sometimes bad practices (as I regard them in retrospect), but somehow I managed to pull through. I tried not to use any plugins - though modularity - is one of WP's major advantages, because I wanted total control over the code and complete understanding of what is going on. In the end I had to use a couple of plugins for multiple authors, for images into categories and for uploading the site to a live server. The plugins caused more problems, for a variety of reasons, a serious one being that the plugins did not have support for the greek language, but there were other issues as well. I had to tamper with the original code to make them work as I needed them. The co-authors plugin caused me even more problems by failing to retrieve data (for reasons I haven't still figured out) in almost half the occasions (nevertheless I still consider it a solid solution). I fixed the problem by deleting from the db the "faulty" entries and re-entering them.</p>
<p>Another notable challenge was indexing the authors in alphabetical order. That meant sorting alphabetically names with characters in the greek, latin and cyrillic alphabet. Since I was warned never to mess with the WP db (and even If I'd wished to, I didn't have the know how) I used the url field as a filter to manually sort the authors; and I had to rename most of them to match the new criteria. That's where co-authors almost completely broke down and I had to rebuild most of the authors db. During the process I've also created my first custom functions with original logic of which I am still very proud, though they are not something really special.</p>
<p>My greatest difficulty though has been with categories. I needed to sort the different posts not only by author(s), neither by date, but by issue. So I created categories, one for each issue. Each post would have its category, with image cover and everything. Great idea up until another problem arised: There is no way to create dynamic links between categories. That means there was no way to create dynamic previous-next category links. This problem bothered me for countless hours. VERY long story short, in the end I worked around the problem by creating an array consisting of the categories-issues ids and creating a 350 lines with if clauses code that sets the links... Not nice to the eye but it did the dirty job...</p>
<p>The project is now up and running! Though a painfull task, It has also been a great experience and I have learned much about php, WP, servers, hosting etc the hard way. Totally worth it, though if I ever revisit this project I'll migrate it to Laravel, without second thoughts.</p>
<p>Feel free to comment and point out bad code and practices, I'd be happy to learn something new!</p>

<p><em>Stathis Andreou @ <a href="https://deepseacoding.com">deepSeaCoding.com</a></em></p>
