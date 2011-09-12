## Installing and Configuring PHP

As noted in Chapter 2 (see "What you will need"), to execute and test PHP scripts you need more than just PHP itself. To display web content, [web server](https://secure.wikimedia.org/wikipedia/en/wiki/Web_server) is required. To access data for display on your web pages, a [database server](https://secure.wikimedia.org/wikipedia/en/wiki/Database_management_system) is required.

PHP by itself can be useful (for example, to write desktop/non-networked applications; see [General Installation Considerations](http://www.php.net/manual/en/install.general.php)). However, most PHP development is for web content based on data extracted from a database.

In this chapter you'll learn how to quickly and easily install PHP, the [Apache](https://httpd.apache.org/) web server, and the [MySQL](https://www.mysql.com/) database server, as well as additional utilities that will make it possible to easily test and run PHP scripts on your own computer.


Sound complicated? It would be, if the only way to get PHP, Apache and MySQL (not to mention various other assorted utilities that make PHP development much easier) was to download and install and configure each and every component separately. You *could* do it that way, if you had a lot of time and a very high tolerance for frustration. For the rest of us, though, a PHP development stack is the way to go.


### The Development Stack

The phrase "web development software stack" refers to the full suite of software used to develop web content. The earliest use of the term came in the late 1990s, with *LAMP* referring to the combination of Linux, Apache, MySQL/PHP and PHP/Perl/Python. One of the benefits of using LAMP is that all components are [free/open source software](https://secure.wikimedia.org/wikipedia/en/wiki/Free_and_open_source_software), meaning that the software is available at no cost and the source code is also freely available.


The four components of any dev stack are:

- *Operating system*: Linux, Windows, Mac OS X, Solaris and other BSD/*nix OSes are all commonly used by web developers. Since web content is meant to be platform independent, web developers (or their employers) may choose the OS they prefer; there should be no difference in the results to end users.
- *Web server*: Any web server will do, as long as it can execute PHP scripts. Most PHP development is done for Apache servers, but [Microsoft IIS](https://www.iis.net/) is also a common choice (for Windows developers).
- *Database*: A DBMS (database management system) is not strictly required, but most web content that is complex enough to require programming will also require a DBMS to manage web content.
- *Programming language*: PHP is one of three "P" programming languages commonly used for web development, the others being [Perl](http://www.perl.org/) and [Python](http://www.python.org/).


In addition, most developers find invaluable a number of utilities for getting it all to work together, including:

- [phpMyAdmin](http://www.phpmyadmin.net/), GUI front-end for working with MySQL databases
- file transfer client and server software
- graphics and font utilities


### Installing the XAMPP Development Stack


**[XAMPP](http://www.apachefriends.org/en/xampp.html)**


==============

#### Quiz

1. What is a web server? What does it do?
2. What is a DBMS? What does it do?
3. What is open source software? What advantages does it have over proprietary software for web development?


==============
