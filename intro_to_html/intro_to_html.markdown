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

Most schools of though suggest that you comment your code or make your code 'self commenting'.  Personally I don't like putting comments in HTML and have never seens a 'self commenting' code
multiple people could understand.

Enter the idea of **Semantic markup**

In the most simplistic terms semantic markup is:

>markup that has meaning; markup that describes the content it contains, rather than what that content should look like. 

This means 
no more *&lt;font&gt;* tags, no more *&lt;b&gt;* tags, no more *&lt;table&gt;* elements used for layout.

To use semantic markup properly you have to think about your content first. For example use &lt;ul&gt; where you have lists, us &lt;p&gt; instead of &lt;div&gt; for content separation and 
### Benefits
####Efficieny
Semantic Markup also lets you establish a common vocabulary for your site markup. Developers don’t need to take extra time to consider what markup should be used for different types of content. A paragraph gets a &lt;p&gt;. An ordered list gets an &lt;ol&gt; etc,.

Further, by following these standards and eliminating unnecessary &lt;div&gt;s, &lt;span&gt;s and nested &lt;table&gt;s, markup is more readable. And readability has a huge impact on how easy it is to troubleshoot, debug and maintain.

#### Accessibility
Another benefit of semantic markup is that it provides the foundation for an accessible site. As I mentioned in my web accessibility and WAI-ARIA primer, assistive technologies such as screen readers navigate sites according to structure. For example, a site marked up with heading elements (&lt;h1&gt;-&lt;h6&gt;) to convey a hierarchical content structure gives screen reader users the ability to jump to different sections in the hierarchy.

And, of course, WCAG 2.0 guidelines encourage semantic markup, not only for page structure, but also for lists (&lt;ul&gt;, &lt;ol&gt;, &lt;dl&gt;) and special text that requires emphasis (&lt;strong&gt;, &lt;blockquote&gt;, &lt;abbr&gt;). Further, these guidelines discourage the use of &lt;table&gt; elements for anything other than tabular data.

#### Readability
Semantic markup is extremely portable.  If can be used by HTML renderers (typically a web browser) but also screen readers, mobile devices and 

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
