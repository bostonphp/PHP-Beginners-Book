# PHP Beginner Book Authors Guide
The PHP Beginner book is a collaborative writing project by Boston PHP. This guide will show you what you need to contribute to the project.

## Our philosophy
The PHP Beginner book is designed to get people learning PHP by explaining concepts in a very easy to understand way, as well as giving them small challenges to use and apply what they are learning.

A fundamental flaw in all the books I have seen, is that they teach you what to do step by step. The learner never has to think for themselves. My belief is that you cannot actually teach something to anyone, what you should do is provide them experiences for them to learn. 

The point is to give the reader an experience to learn

## Why write another PHP book?
There are lots of books out there that teach you the PHP language by syntax, with examples and code that you have to type or paste. Frankly, I am tired of this approach and it is boring for the learner. I have met many would-be PHP developers that have read books, gone through training, tutorials, and other types of approaches and they still don't learn.
 
This book takes a different approach. I will teach you by giving you small development challenges. You will work on these development challenges and learn by seeing and doing. It is a unique and fun way to learn that will get you coding faster, since you are applying what you learn step by step.

## How to help write the book
Thank you for willing to partake in the writing of this book. Whatever your level of involvement is, I wanted you to know how much I appreciate your support. Teaching someone to code is not going to be an easy task, but it is a very rewarding experience. I like to think that we cannot move to the next level in our experience, unless we can teach what we learned. By teaching you are actually learning many things about yourself and your subject matter.

*In order to work on this project you will need the following:*

1. Sign the [author's agreement](https://github.com/bostonphp/PHP-Beginners-Book/blob/master/authors_guide/agreement.markdown)
2. A good understanding of Markdown
	- A Markdown-formatted document should be publishable as-is, as plain text, without looking like it's been marked up with tags or formatting instructions. Markdown's syntax is comprised entirely of punctuation characters, which punctuation characters have been carefully chosen so as to look like what they mean. E.g., asterisks around a word actually look like \*emphasis\*. Markdown lists look like, well, lists. Even blockquotes look like quoted passages of text, assuming you've ever used email.
	- Markdown is a wonderfully simple approach to creating rich content with plain text. Written by John Gruber of Daring Fireball. You get on with the business of writing (without any fancy code) and Markdown takes care of producing clean textual output suitable for different output formats.
	- Here is an [overview of the syntax](http://daringfireball.net/projects/markdown/syntax)  
3. A good understanding of Git and GitHub
	- You will need to a GitHub account, and Git installed on your computer
	- Learn about [Git here](http://progit.org/book/ch1-3.html) 
4. A good markdown editor
	- I like to use iaWriter for the Mac. This is a distraction free writing tool that creates pure Markdown. You can get [iaWriter from the App Store](http://itunes.apple.com/us/app/ia-writer/id439623248?mt=12) 
5. A good understanding of collaboration through Agile with Pivotal Tracker
	- Here is our [Pivotal Tracker Project](https://www.pivotaltracker.com/projects/322967) 
6. A writing style that is compatible with the book
	- Friendly, Conversational language
	- Explain concepts by telling stories, analogies, examples
	- Be funny and amusing at times
7. Give code examples along the way
	- Do not give all the code to the learner all at once. Layer on the code a little at a time so they can see cause and affect.
	- Code needs to be well formatted and commented
8. A fun attitude
	- If you have fun writing this, then it will show. I don't want this to be another boring PHP book. So promise me you wont write if you're not having fun. Take breaks, and don't take yourself too seriously. 

## The writing process
You will be assigned a certain part of the book that will be merged in at a later date. This will allow you to work independently without worrying about anyone else. However, you will be expected to commit your work often to GitHub. This way we can see the work evolve and adjust accordingly, as well backup your work.

### Outlining
Before you go off and start writing your part of the book, I will be asking each writer to send me a rough outline scaffold of their work. This can be a list of topics you plan to cover in the order you feel is good for a valuable lesson. This rough outline should also contain a sample section of code you want to show within the book.

### Will I get credit for my work?
Yes, you will get credit for your work in terms of you as the author of that section. But please do not expect more than that. This is an open source project, and this book is free to the public. You should only be doing this because you believe in the project and the philosophy, and want to teach the world how to code.

## Standards
Please follow these standards when writing the book.

### Code
When showing code to the user, please indent the code with one tab top. Markdown knows how to treat this as source code and when you do this the code will appear in mono-spaced font and will appear like source code.

Example:

	<?php // filename.php
		$variable = 'Test';
		echo $variable;
	?>

Also try and give a hint to the type of code your giving by adding a comment line above that gives the name of the file. If you need to show that the source is a snippet, you can do this:

	<?php // filename.php
		...
		$variable = 'Test';
		echo $variable;
		...
	?>

Please remember to use good structured code that is indented, and easy to look at and read. Use comments and good variable names. This is what I like to call pseudo code. It's not really intended to be run, it's intended to teach, so be a bit more verbose than you might otherwise be with comment, variable names, etc.

### Tables
If you need to display a table, you can do so using Markdown by using pipe characters within your tabular data

	|Heading 1|Heading 2|
	|-|-|
	|data|data|
	|data|data|

Will look like this:

|Heading 1|Heading 2|
|-|-|
|data|data|
|data|data|



