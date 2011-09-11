## Installing and Configuring PHP

As noted in Chapter 2 (see "What you will need"), to execute and test PHP scripts you need a bit more than just PHP itself: a web server is required--and a database server will probably come in handy, too. In this chapter you'll learn how to quickly and easily install all the software you need to test and run your PHP scripts on your own computer.

PHP by itself can be useful (for example, to write desktop/non-networked applications; see [General Installation Considerations](http://www.php.net/manual/en/install.general.php)), but most developers use PHP to produce web content--which calls for installing a web server like [Apache](http://httpd.apache.org/) at a minimum if you want to be able quickly and easily test your code locally. While a database server is not technically required, web content complex enough to need PHP will also likely require a relational database like [MySQL](http://www.mysql.com/).

Sound complicated? It would be, if the only way to get PHP, Apache and MySQL (not to mention various other assorted utilities that make PHP development much easier) was to download and install and configure each and every component separately. You *could* do it that way, if you had a lot of time and a very high tolerance for frustration. For the rest of us, though, an **AMP** stack is the way to go.


### The AMP Development Stack

A web development stack software generally comprises:

- An operating system, of course. AMP development stacks are readily available for Windows, Mac OS X, Linux and other Unix-like OSes.
- A web server. [Apache](http://www.apachefriends.org/en/xampp.html) is the "A" in "AMP", and the world's most widely deployed and used webserver.
- A database manager. [MySQL](http://www.mysql.com/) is the "M" in "AMP".
- A programming language. PHP is one of three programming languages used for web development, the others being [Python](http://www.python.org/) and [Perl](http://www.perl.org/).
- Various utilities for getting it all to work together, including:
  - [phpMyAdmin](http://www.phpmyadmin.net/), GUI front-end for working with MySQL databases
  - file transfer client and server software
  - graphics and font utilities

The most widely used (and supported) AMP stack projects include:

- **[XAMPP](http://www.apachefriends.org/en/xampp.html)**
- **LAMP**
- **WAMP**
- **[MAMP](http://www.mamp.info/en/mamp/index.html)**

==========
Let's get your computer ready so you can start learning and creating PHP scripts.

One of the easies ways for you to install PHP is to use a PHP distribution application like WAMP, MAMP, or XAMP. These applications come bundled with all the components you will need:

- **Apache web server:** This allows your computer to serve HTML pages through your browser.
- **MySQL:** This is a database that stores and persists information collected from your application
- **PHP:** This is the PHP interpreter and a module of Apache 

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
