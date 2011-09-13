## Installing and Configuring PHP

While PHP by itself can be useful (for example, to write desktop/non-networked applications; see [General Installation Considerations](http://www.php.net/manual/en/install.general.php)), most PHP development is for web content based on data extracted from a database.

As noted in Chapter 2 (see "What you will need"), to execute and test PHP scripts you need more than just PHP itself. To display web content, a [web server](https://secure.wikimedia.org/wikipedia/en/wiki/Web_server) is required. To access, edit, and update data for display on your web pages, a [database management system](https://secure.wikimedia.org/wikipedia/en/wiki/Database_management_system) is required.

In this chapter you'll learn:

- What a web development stack is, and what it includes.
- Why you might want to develop on your web hosting account, and why you might want to install PHP on your own computer.
- How to use the **[XAMPP](http://www.apachefriends.org/en/xampp.html)** web development stack to quickly and easily install PHP, the [Apache](https://httpd.apache.org/) web server, the [MySQL](https://www.mysql.com/) database server, and some additional utilities that will allow you to write, test and run PHP scripts on your own computer.
- How to check that your web development stack installation and configuration was successful.


### The Development Stack

The term "web development software stack" refers to the full suite of software used to develop web content; in other words, all the software, from the operating system up. The earliest use of the term came in the late 1990s, with *LAMP* referring to the combination of Linux, Apache, MySQL/PHP and PHP/Perl/Python. One of the benefits of using LAMP is that all components are [free/open source software](https://secure.wikimedia.org/wikipedia/en/wiki/Free_and_open_source_software), meaning that the software is available at no cost and the source code is also freely available for anyone to review or modify.


The four components of any dev stack are:

- *Operating system*: Linux, Windows, Mac OS X, Solaris and other BSD/*nix OSes are all commonly used by web developers. Since web content is meant to be platform independent, web developers (or their employers) may choose the OS they prefer; there should be no difference in the results to end users.
- *Web server*: Any web server will do, as long as it can execute PHP scripts. Most PHP development is done for Apache servers, but [Microsoft IIS](https://www.iis.net/) is also a common choice (for Windows developers).
- *Database*: A DBMS (database management system) is not strictly required, but most web content that is complex enough to require programming will also require a DBMS to manage web content.
- *Programming language*: PHP is one of three "P" programming languages commonly used for web development, the others being [Perl](http://www.perl.org/) and [Python](http://www.python.org/).


In addition, most developers find invaluable a number of utilities for getting it all to work together, including:

- [phpMyAdmin](http://www.phpmyadmin.net/), GUI front-end for working with MySQL databases
- [FTP](https://secure.wikimedia.org/wikipedia/en/wiki/File_Transfer_Protocol) file transfer client and server software
- other utilities depending on the OS


### Installing the XAMPP Development Stack


**[XAMPP](http://www.apachefriends.org/en/xampp.html)**


==============

#### Quiz

1. What is a web server? What does it do?
2. What is a DBMS? What does it do?
3. What is open source software? What advantages does it have over proprietary software for web development?


==============
