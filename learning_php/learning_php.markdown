# Learning PHP
Copyright 2011, Boston PHP, All rights reserved.

## Why write another PHP book?
There are lots of books out there that teach you the PHP language by syntax, with examples and code that you have to type or paste. Frankly, I am tired of this approach and it is boring for the learner. I have met many would-be PHP developers that have read books, gone through training, tutorials, and other types of approaches and they still don't learn.
 
This book takes a different approach. I will teach you by giving you small development challenges. You will work on these development challenges and learn by seeing and doing. It is a unique and fun way to learn that will get you coding faster, since you are applying what you learn step by step.

You should already have some basic understanding and experience in creating HTML pages and a little CSS.

This book is a work in progress. We are constantly adding to it and editing it to make it better. It's not completed yet. So you might save it locally, print it, or save to PDF so you don't see change while your using it.

## What you will need
For you to learn PHP in this book, you will need the following things:

- A Computer or Laptop
- A good text editor
- Access to the internet
- Web server with PHP Installed

Look to the section on how to install PHP on your computer.

## About the author
Michael Bourque is the organizer of [Boston PHP](http://www.bostonphp.org), the largest and most active PHP community in the world. He is passionate at teaching and mentoring folks on using open source technology to take their passion, ideas, and creativity, and turn it into something great.

Michael taught himself to program when he was 13 years old. He bought a used Radio Shack TRS-80 computer, turned it on, and started to hack. Through the years he has taught himself Basic, Assembly, Java, C, C++, Perl, and PHP.

## Table of contents
-TOC-

# Chapter 1: What is PHP?
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

# Chapter 3: Installing PHP so you can write applications
Let's get your computer ready so you can start learning and creating PHP scripts.

One of the easies ways for you to install PHP is to use a PHP distribution application like WAMP, MAMP, or XAMP. These applications come bundled with all the components you will need:

* **Apache web server:** This allows your computer to serve HTML pages through your browser.
* **MySQL:** This is a database that stores and persists information collected from your application
* **PHP:** This is the PHP interpreter and a module of Apache 

Let's dive a little deeper into each of these sections to understand them more.

### Apache Web Server
Apache is a free and open source web server that is probably the most popular web server in the world today. Its sole purpose is to serve web pages through something called an HTTP connection. Ever notice that in a url, that it always starts with HTTP? That stands for Hyper Text Transfer Protocol, and its a fancy term for the way that web pages are transmitted to your browser. Apache runs as a service, and listens in on a port (usually port 80) for a url request when it is asked.

**Here is what is does in a nutshell**

1. Listen to a URL http request 
2. When received, fetch the file from the disk
3. Process the file, and do something to it if needed
4. Send it to the users computer (browser)

### MySQL Database
MySQL is a type of Database that is free and open source which is why it is so popular. Databases make it very easy to store and retrieve data from your server. The do this with a command language known as Structured Query Language (SQL).

Let's say you want to have a web form that collects the users first name. In your PHP script you would save the data with the following SQL command:

	INSERT INTO users SET name='Michael';  
	
Later, when you want to retrieve the users that are stored in your database, you would use the following SQL command:

	SELECT name FROM users;	

This would return all the users name stored in the database.

### PHP Interpreter
PHP is many times installed and integrated into Apache. When webpage with the extension of .php is read by Apache, then the file is scanned looking for PHP open and closed tags. Whenever these tags are found, the PHP interpreter is used and control is handled by your program.

### Installing as a Package
Download one of the following PHP package distributions for your computer.

|Platform|Software|
|-|-|
|Windows|Download and install [WAMP](http://www.wampserver.com/en) and follow the instructions on their site for installation.|
|Mac|Download and install [MAMP](http://www.mamp.info/en) and follow the instructions. I use this myself on my MacBook and really like it.|
|Linux|Download and install [XAMPP](http://www.apachefriends.org/en/xampp.html) and follow the instructions.|

### Installing manually
I usually don't recommend this for beginners because I don't want you to get stuck and spend hours getting it to work. I want you to learn to program, not to be a systems engineer or administrator. However if you insist, this next section should be helpful.

## Tools of the trade
There are a few things I want you to have handy as you start your journey into web development. They will make your learning experience much better.

### A good text editor (IDE)
It's very important you have a good text editor to work with or an IDE. An IDE stands for Integrated Development Environment. It is a fancy term for a good text editor with lots of tools to help you write and manage code. Writing and working in code is a lot different than writing a book or document. So make sure you take the time to get setup with a good one:

You will need a good IDE that uses mono spaced type face with no formatting.

**My favorites:**

- [Notepad++ for PC](http://notepad-plus-plus.org)
- [Komodo edit for Mac or PC](http://www.activestate.com/komodo-edit)
- [Coda for Mac](http://www.panic.com/coda)
- [TextMate for Mac](http://macromates.com)
- [TextWrangler for Mac](http://www.barebones.com/products/textwrangler)

### A good browser
If your going to do web development, then you should understand that not all browsers are alike. All web browsers render pages and javascript slightly differently. This makes it hard for the web developer to create a consistent experience for all users.

As you develop your applications, you are going to need to test them in your browser. Some browsers really lend themselves to web development by offering add-on tools and features.

I would recommend that you download and install one of the following browsers:

- Mozzila Firefox
- Google Chrome
- Apple Safari

### Web developer toolbar
If your using Firefox, I highly recommend this the add-on/extension. It will allow you to do various things like disable javascript, disable/enable styles, as well as a number of other great features

### Firebug

### MySQL GUI client

### Blogs and reference
This book will only take you so far, so I would recommend the following resources to help you:

|Site|What it covers|
|-|-|
|[PHP Functional reference](http://php.net)|This is where you will find all the PHP reference documentation. This is probably the most popular page for getting information and syntax help on the language. There is also tons of code examples, the user contributed notes.|

# Chapter 4: Forms
One of the first things I like to teach is how to create a web form to collect user data. 

In order to collect user data, you will need an HTML form that contains a form and some form elements. This is easy to do:

	<!-- form.php -->
	<form type='post' action='index.php'>
		<label for='name'>Name:</label>
		<input type='text' id='name' name='name' />
	</form>

The code above does a few things. It tells the web browser that you plan to collect some data from the user starting and ending with the <form> tags. 

**<form>**
In order to collect data from the user, you need to create an html form. This is done with the *<form>* tag. This tag tells the browser that to send collected data to the server. You need to have an open and close form tag. There are a few important form elements you should know what they do:

**type='Post'**

The __type='post'__, describes the way we send the data to the server. In this case we want to post (send) the data so we will us post.  

# Chapter 5: Variables
Variables store information temporarily in your program. It's a little like the button on your calculator used to store the last value computed. They are very important to any programming language, and you will use them all them time.

**Variables can hold different types of information:**

- String
- Integer
- Float

In PHP, it is very easy to create variables:

	$name = "Michael"; // Stores a string
	$quantity = 3; // Stores an integer
	$price = 3.25 // Stores a float
	$total = $price * $quantity;

# Chapter 6: Flow control

# Chapter 7: Logic operators

# Chapter 8: Functions
Functions are the most amazing and useful things you will learn about programing. They are a way to reduce the receptiveness in your program, by creating a special mini program designed to do something, based on your parameters.

	// Example function
	function add_values( $value1, $value2 ) { // Add two values together
		$total = $value1 + $value2;
		return $total;
	} // end add_values()
	print add_values( 1, 15 ); // returns 16

# Chapter 9: Object Oriented Programming

# Chapter 10: Challenges
Ok, now we are going to have some fun. 

## Challenge 1
In this challenge, we are going to look at how PHP handles variable types. You will see how flexible and lenient the language can be. It also demonstrates how easy it can be to depend on this, which can get you into trouble later on when trying to debug your program.

**What is wrong with the following code?**

	$a = '1';
	$b = '2';
	$c = $a + $b;
	echo $c;

**What will echo to the screen?**

1. 12
2. 3
3. 0
4. Error

**Answer:** The correct answer is #2, which returns the value of 1+2=3. PHP is very flexible when it comes to variable type casting. We really __should not have put quotes around the values__. But in this case, PHP still determined that the values were indeed numbers, so it did what we wanted by added the values. In other languages, this would not be possible. If one of the values started with an alphabetic character, then the output would be different. You should try it yourself with different combinations and see what happens.

# Chapter 11: Good practices
It is very important to keep your code and your projects in good shape. It's easy to take shortcuts, but I find you will pay the price later if you do not at least practice some best practices. Here are my favorite best practices I have developed to keep you organized.

## Code formatting
### Format
### Conventions

## Source code control
### Git
### Subversion
### Mercurial

# Chapter 12: Other things you should know
## Requirements management

## Documentation
### Source code comments

## jQuery

## CSS

# PHP Frameworks
Once you get more established with the PHP language, I would strongly recommend that you start looking to move to a PHP Frameworks.

Frameworks are an existing set of application code that you start projects with. They come out of the box with most of code you need to do common things in web applications. Such as Login & Authentication, Authorization, Database access, Security, etc.

They take out the repetition and let you write more code specific to your own application (business logic). You spend less time messing around on code that is not specific to your application, like database calls and such.

**Some of the more popular PHP Frameworks are:**

- [CakePHP](http://cakephp.org)
- [ZF Zend Framework](http://framework.zend.com)
- [CodeIgniter](http://codeigniter.com)
- [Symfony](www.symfony-project.org)

I have been programming web applications for years, and I wouldn't think twice about not using a framework. They just save you a lot of time. However, it does come at a cost. You need to take a while to learn the conventions of the framework. This is why I don't recommend starting here. A framework is only as good as how well it is documented, and how much you invest to learn it. Once you master the language and the framework, you will find you can create applications very quickly. In a recent coding contest at Boston PHP, I witnessed a fully working web application being built in under 30 minutes.

All these frameworks follow a could of important principles:

- **CRUD:** Stands for Create Read Update, and Delete
- **RAD:** Rapid Application Development
- **DRY:** Don't repeat yourself
- **KISS:** Keep It Simple Stupid

# Conclusion: Where do you go next?

# Index
Syntax
Variables
String
Operators
If...Else
Switch
Arrays
While Loops
For Loops
Functions
Forms
PHP $_GET
PHP $_POST

# Acknowledgments

# Tools I used to write this book

- **[iaWriter for the Mac](http://www.iawriter.com):** This is a great distraction free writing tool for the Mac. It allows the author to write effortlessly in Markdown format. The output format is a text file that uses Markdown to signify headings, emphasis, etc. 
- **[CakePHP Framework](http://www.cakephp.org):** I wrote a little CakePHP app that takes the Markdown text file and formats it for the web. It converts the Markdown to suitable HTML elements, as well as automatically creating a table of contents and index.
- **[Komodo IDE](http://www.activestate.com/komodo-ide):** My favorite IDE for writing code. All the examples in this book were typed into Komodo and tested there are well. I also used Komodo to create and edit the CakePHP application.
- **[GitHub](http://www.github.com):** I am using Git and GitHub to store and vault both the book and the CakePHP source code. Read the section on Source Code Control to learn more about it.
- **[Git Tower](http://www.git-tower.com):** This is a GUI client for Git and GitHub. At heart, I am still a GUI lover and I struggle to do everything from the terminal. GitTower is a great product that makes it easy to commit code, and diff your changes.
- **[BeanTownHost](http://www.beantownhost.com):** Boston PHP uses BeanTown Host as our web hosting service. They are great to work with, inexpensive, and cater to your needs. Check them out at [http://beantownhost.com]()
- **[Markdown](http://daringfireball.net/projects/markdown):**
- **[Print and Media stylesheets](http://www.onextrapixel.com/2009/05/05/how-to-create-a-simple-print-css-for-your-site):** You might notice that if you print or are reading this book in PDF format, that links are actually written in the text. However if you are reading this online, then the links are actually real hyperlink that you can click. This is because I am using two different CSS stylesheets one for print and the other for the screen. This lets me enhance the online experience, yet provide a book format that works as well.
- **Balsamiq Mockups:**
- **jQuery:**