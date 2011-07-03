PHP stands for **P**HP **H**ypertext **P**rotocol. The initials originally were for **P**ersonal **H**ome **P**age, but as the language started to evolve and become more robust, the creators decided to change it.

PHP is perhaps one of the most popular and widely used web application programming language. I say web application here because in most cases, PHP is used create web applications. Many popular websites and applications are written in PHP.

- Facebook
- Yahoo
- WordPress
- Drupal
- Flickr *citation needed*

PHP is also very easy to learn. If your like most reading this book, you probably already know how to create web pages with HTML, Javascript, and CSS. Since you can mix PHP and HTML together in the same file, you will find it easy to learn.

PHP is also referred to as scripting language. This basically means that the programs you write do not need to converted by another program called a compiler in order to work. For example, you can save a PHP script directly to your web server and it will run. If you were using Java, you would need to compile the program to byte code before it will run. Examples of scripting languages are PHP, Python, and Ruby. Examples of compiled languages are are Java, C, and C++.

In order to run PHP programs, you to have a PHP service installed and running on your server or PC. Most web hosting services now have PHP already installed and running. Also Apple Mac computers now have PHP already installed. In a later chapter, I will show you how to get PHP setup and running in no time.

## An example of a PHP script
Let's look at the worlds most simple PHP script. Just three lines is all you need...

	<?php
	echo "Hello PHP";
	?>

*Outputs*

	Hello PHP

Notice that the script above starts with **<?php**. We call this an opening PHP tag. It's a lot like an opening HTML tag. This tag tells your webserver that what follows is now going to be interpreted as PHP. On the last line, we close the PHP tag which tells the server to switch back to HTML. The middle line, we use a command called **echo**, which is a PHP function to print something to the screen. We put what we want to print between quotes, so that there is no confusion on what to print. Also notice we end each command with a **;**. This tells PHP that we are done with that command and there is no more code on that line to process.

## Example of mixing PHP and HTML together
One of the more powerful concepts with this approach is that you can mix HTML and PHP together in one file.

Look at the code below which is saved as index.php:

	<!-- index.php -->
	<html>
		<head></head>
		<body>
			<h1><?php echo "Hello PHP"; ?></h1>
		</body>
	</html>

You can see that you can mix HTML and PHP together in the same file. Once the your webserver sees the opening PHP tag, it knows that the following code needs to be interpreted as PHP. If you were to run the file above, it would show a web page that that a heading of "Hello PHP":

	<!-- source of index.php -->
	<html>
		<head></head>
		<body>
			<h1>Hello PHP</h1>
		</body>
	</html>

Just think what you can do with this. You could have a webpage that prints out the current date:

	<!-- source of index.php -->
	<html>
		<head></head>
		<body>
			<h1>Today's date is <?php echo date("F j, Y, g:i a"); ?></h1>
		</body>
	</html>

What does this look like?

	Today's date is June 5, 2011, 9:52 am 

# Chapter 2: What you can do with PHP
I have often thought that software development is a creative art. Most of the best developers I have met and worked with, were creative people. In fact, many times I find that the most creative developers never studied computer science in college.

One thing I really love about PHP is that the learning curve is not that high. So you have people from all varying backgrounds using PHP to take their ideas and make them come to life. When you can take a person with a interesting background, with a killer idea, and teach them to use PHP to launch their idea - well, that's a winning combination. Otherwise the person with the idea has to hire a developer, and much time, energy, and money can be wasted trying to describe and create the solution.

**Some things you can do with PHP?**

- Create a website for you and your business
- Create a mobile site
- Create web forms that collect data on the web
- Automate tasks that take a long amount of time
- Create your killer startup 