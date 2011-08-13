## How
## Why
## Tools
## Basic Structure
### Bare Minimum
#### DocType
#### Head
#### Title
#### Body
	<!DOCTYPE html>
 	<html>
 	<head>
 		<title>
 			This is the title of the page.
 		</title>
 	</head>
 	<body>
 		The body text goes here.
 	</body>
 	</html>
## Semantics
Anyone who has written code (of any kind) for any length of time knows there are two types of code that is painful to work on.  Someone elses code, and code you wrote months ago.

There are generally two schools of thought on how to rectify this, comment your code or make your code 'self commenting'.  Personally I don't like putting comments in HTML and have never seen 'self commenting' code multiple people could understand easily.

Enter the idea of **Semantic markup**

In the most simplistic terms semantic markup is:

>markup that has meaning; markup that describes the content it contains, rather than what that content should look like. 

In other words, let the HTML help you to define the *structure* of the document.

To use semantic markup properly you have to think about your content first. For example use &lt;ul&gt; where you have lists, us &lt;p&gt; instead of &lt;div&gt; for content separation and using *&lt;table&gt;* for tabular data (not layout).

### Benefits
#### Efficieny
Semantic Markup also lets you establish a common vocabulary for your site markup. Other developers don’t need to take extra time to consider what markup should be used for different types of content. A paragraph gets a &lt;p&gt;. An ordered list gets an &lt;ol&gt; etc,.

By creating and following standards, and by eliminating unnecessary &lt;div&gt;s, &lt;span&gt;s and nested &lt;table&gt;s, your HTML markup is more readable. And being more readable means it's easier to troubleshoot, debug and maintain. This can also result in a smaller overall page size, which, in turn means faster page load which mean happier users. Remember, not everyone has high-speed broadband access and not everyone uses the latest and greatest technologies.

#### Accessibility
A huge benefit of using semantic markup is that it provides a solid foundation for building an accessible site. Technologies such as screen readers navigate sites according to structure, and generally from top down. For example, a site marked up with heading elements (&lt;h1&gt;-&lt;h6&gt;) to convey a hierarchical content structure gives screen reader users the ability to navigate to different sections within the document.

WCAG 2.0 guidelines encourage semantic markup, not only for page structure, but also for lists (&lt;ul&gt;, &lt;ol&gt;, &lt;dl&gt;) and special text that requires emphasis (&lt;strong&gt;, &lt;blockquote&gt;, &lt;abbr&gt;). Further, these guidelines discourage the use of &lt;table&gt; elements for anything other than tabular data.

#### Readability
Semantic markup is extremely portable.  If can be used by HTML renderers (typically a web browser) but also screen readers, mobile devices and 

One of the more challenging aspects of writing semantic markup is figuring out the proper elements to use. For some content, it is immediately clear that a &lt;p&gt; should be used or an &lt;h1&gt;. In other cases it's not so clear and can take a few tries before it looks and _feels_ right.
### When to use
In general, always. Let me use a chunk of code from mu website to show a couple examples. I'll show what it looked like before and what it looks like after adding semantic markup

#### Before
	<div>
		<p><a href="/" title="Home">Home</a></p>
		<p><a href="/about/" title="About">About</a></p>
		<p><a href="/archives/" title="Archives">Archives</a></p>
		<p><a href="/scribblings-2/" title="Scribblings">Scribblings</a></p>
	</div>

#### After 
	<div class="menu">
		<ul>
			<li><a href="/" title="Home">Home</a></li>
			<li class="page_item page-item-2"><a href="/about/" title="About">About</a></li>
			<li class="page_item page-item-651"><a href="/archives/" title="Archives">Archives</a></li>
			<li class="page_item page-item-573"><a href="/scribblings-2/" title="Scribblings">Scribblings</a></li>
		</ul>
	</div>

Notice that the overall layout didn't change that much.  The &lt;p&gt;s were changed to &lt;li&gt;s and that was pretty much it.  In this case (and most really) it's not the *how* that you really have to think about, but the *why*. The the first example those links could have been anything.  A collection of random links collected from the net or a set of XXX, or anything really.  In this example however, I knew were a essentially a menu of internal navigation links, so it made sense to group them together making an ideal candidate for an unordered list element (&lt;ul&gt;).


### HTML 5
HTML5 has dramatically helped the semantic landscape by adding a number of new elements that can, and should reduce the number of _divs_ and _spans_ in your document. With the new _header_, _section_, _footer_, _nav_, _article_, and _aside_ elements you can eliminate things such as _&lt;div id="nav">_.  

Let's revist the example of using the menu elements and see what it looks like if we use the _&lt;nav>_ element:

	<nav>
		<ul>
			<li><a href="/" title="Home">Home</a></li>
			<li class="page_item page-item-2"><a href="/about/" title="About">About</a></li>
			<li class="page_item page-item-651"><a href="/archives/" title="Archives">Archives</a></li>
			<li class="page_item page-item-573"><a href="/scribblings-2/" title="Scribblings">Scribblings</a></li>
		</ul>
	</nav>
	
It's a subtle difference in this case, changing the _div_'s to _nav_ but the meaning has become clearer and anyone that looks at the code will know instantly that the items in the _&lt;nav>_ elements are meant to be navigation.

	<html>
		<head>
		</head>
		<body>
			<header>
				<nav>
				</nav>
			</header>
			<section>
				<article>
					<header>
					</header>
					<aside>
					</aside>
				</article>
				<article>
					<header>
					</header>
				</article>
			</section>
			<section>
				<aside>
				</aside>
			</section>
			<footer>
			</footer>
		</body>
	</html>
## Layout
### HTML (up to 5)
#### headers
Header tags are block-level elements, so they put in line breaks for you. No toehr markup allowed inside heading tags.
#### div

### HTML5
#### header
#### nav
#### article
#### section
#### footer
#### Styleg elements in:
##### HTML5
Prior to 
## Forms
## Images
## Links
## Lists
## Tables
	&lt;table&gt;
	&lt;/table&gt;
