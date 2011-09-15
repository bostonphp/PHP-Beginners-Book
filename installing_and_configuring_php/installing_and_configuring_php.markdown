## Installing and Configuring PHP

While PHP by itself can be useful (for example, to write desktop/non-networked applications; see [General Installation Considerations](http://www.php.net/manual/en/install.general.php)), most PHP development is for web content based on data extracted from a database.

As noted in Chapter 2 (see "What you will need"), to execute and test PHP scripts you need more than just PHP itself. To display web content, a [web server](https://secure.wikimedia.org/wikipedia/en/wiki/Web_server) is required. To access, edit, and update data for display on your web pages, a [database management system](https://secure.wikimedia.org/wikipedia/en/wiki/Database_management_system) is required.

In this chapter you'll learn:

- What a web development stack is, and what it includes.
- Why you might want to develop on your web hosting account, and why you might want to install PHP on your own computer.
- How to verify the version of PHP being run on a server.
- How to use **[XAMPP](http://www.apachefriends.org/en/xampp.html)** to quickly and easily install PHP, [Apache](https://httpd.apache.org/), [MySQL](https://www.mysql.com/) and additional utilities that will allow you to write, test and run PHP scripts on your own computer.
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


### Can You Develop on Your Web Host Account?

If you are going to use PHP to develop web content for publication on a webserver hosted through a web hosting provider, it is possible (but not recommended) to use that account for development. Doing so allows you to skip the whole software installation process, but it means you can only develop when you have internet access. It is also risky to run development code on a "live" server.

On the other hand, developing on your web hosting account can be an acceptable alternative if you work from more than one computer, since all of your work can be accessed over the network. Also, using the web hosting account allows you to leave administrative tasks (software updates, security) to the web hosting technical staff.

If you do choose (against all advice) to develop on a web hosting account, you'll probably be using *nix command line interface tools such as [Vi](http://en.wikipedia.org/wiki/Vi) or [Emacs](http://en.wikipedia.org/wiki/Emacs) (text editors), [ssh](http://en.wikipedia.org/wiki/Secure_Shell) for connecting to the remote host and and [sftp](http://en.wikipedia.org/wiki/SSH_File_Transfer_Protocol) for transferring files (if needed). If you are not already familiar with those tools, you probably should not even consider using your web hosting account for development.

In any case, you'll need to verify that your web hosting provider is running a current version of PHP.


### Checking PHP Version

The first step is to confirm that your hosting provider is running a current stable version of PHP. This should be as simple as checking your provider's web site; however, you can check with a one-line PHP script. 

Use your editor to create a file called `phpversion.php` and enter just the following line:

	<?php echo phpversion(); ?>

Save the file, move it to your hosted web server, and open it with a browser (the URL should be something like `www.example.com/phpversion.php` if the file is in the website's root directory). The resulting web page should contain three numbers in dotted decimal notation. Check here for the [current stable version of PHP](http://php.net/downloads.php). As of this writing (09/13/2011), PHP 5.3.X is the only supported series, and the current stable version is 5.3.8.

#### Did That Work?

If it did, great! Congratulations, you've written your first successful PHP script. Be sure to remove the script; it's a good habit to remove any extraneous code like that script from your web servers.

If it didn't work, also great! Congratulations, you're ready to embark on your first bug hunt. Some tips for resolving the problem:

- Is the script file where you think it is? Do you know where it is? Do you know where it's supposed to be? Do you know how to get the file there?
- Did the script load but fail to run? Check the script for typos.
- Make sure that the script filename is `phpversion.php` and *not* `phpversion.php.txt` or `phpversion.php.rtf`. Refer to section (???) for more about choosing and using a text editor.


For extra credit, try using the PHP command `phpinfo()` instead of `phpversion()` and see what you get. Again, be sure to remove the script after you've verified that it works; `phpinfo()` provides a lot more information, some of which could be used against you by a malicious user.


### Installing the XAMPP Development Stack

Installing [XAMPP](http://www.apachefriends.org/en/xampp.html) is quite simple:

- Choose the operating system you are using (Windows, Mac OS X, Linux or Solaris)
- Download and unpack the XAMPP collection
- Start the software
- Test the installation with a browser

For more specific help with particular problems, try the [XAMPP forums](http://www.apachefriends.org/f/viewforum.php?f=34), or your favorite search engine with details about your problems. For tips and a general idea of how to do the installation on Linux, Windows or Mac OS X, see the appropriate section below.

By design, XAMPP is intended to be fully functional right out of the box. The default configuration should work on your system without any tweaking. However, the default XAMPP configuration is designed to be easy to use with all options turned on, **not** a foolproof or secure configuration suitable for productions systems. It **is** meant to be appropriate for quickly getting up and developing on an isolated system.


#### Installing XAMPP on Linux

#### Installing XAMPP on Windows

#### Installing XAMPP on Mac OS X


==============

#### Quiz

1. What is a web server? What does it do?
2. What is a DBMS? What does it do?
3. What is open source software? What advantages does it have over proprietary software for web development?


==============
