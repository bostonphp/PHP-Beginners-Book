One of the first things I like to teach is how to create a web form to collect user data. 

In order to collect user data, you will need an HTML form that contains a form and some form elements. This is easy to do:

	<!-- form.php -->
	<form type='post' action='index.php'>
		<label for='name'>Name:</label>
		<input type='text' id='name' name='name' />
	</form>

The code above does a few things. It tells the web browser that you plan to collect some data from the user starting and ending with the <form> tags. 

- **<form>**
In order to collect data from the user, you need to create an html form. This is done with the *<form>* tag. This tag tells the browser that to send collected data to the server. You need to have an open and close form tag. There are a few important form elements you should know what they do:

- **type='Post'**
The __type='post'__, describes the way we send the data to the server. In this case we want to post (send) the data so we will us post.  

## Undetstanding the documentation on PHP.net
One of the best things about PHP, is the amazing documentation that is available on PHP.net. Here you will find functional references for just about everthing that PHP can do. The documentation is easy to use, has great search, and gives valuable user contributed notes along with each function reference.

It's important you learn to use this powerful reference.

### Finding references
When you visit PHP.net, at the upper right corner of every page is a search box. Just type the name of a function here, or anything your looking for and PHP.net will return you a list of pages that are relevant.

Try searching for 'foreach' and 'while'.

### Function description (syntax)
When viewing a functional reference page, you need to understand how the syntax is represented in the description:

string **substr** ( string *$string* , int *$start* [, int *$length* ] )

This may look like gobbley gook to you, but it is all that one should need to understand how to use this function. Let's break it down.

From left to right:

- To the left of the function name is the return value. In this case, this function will return a string value. Other functions may return integers, arrays, objects, etc. In some cases, you will see a function return something called bool, this means the function will return true or false. If you see a function that returns void, then this means that nothing is returned. Mixed means that the function can return a mixture of return types like Integer, String, Array, etc.
- The next part is the name of the function itself.
- The next part is the parameters passed to the function separated by commas. In each case, there is an example of what type of value that should be passed. Example: string $string, or int $start. Sometimes you will see a value set within the syntax. This means that this is the default value. In some cases, the parameters are withing square brackets. This indicates that the parameter is optional, and does not need to be set.

**Usign the example above:**

	$myNewString = substr( $myString , 5 );

or

	$myNewString = substr( $myString , 5, 10 );
 
### Examples
### Notes
### See also
### User contributed notes

## Loops
As a developer, I am very lazy. I cannot stand doing the same thing over and over and over again. I would much rather spend some extra time to avoid having to do something repetitive. 

A powerful feature of PHP is looping. It will save you countless hours of typing, and allow you to make your code more flexible, scaleable, and more compact.

Let's explore the **foreach** loop. Imagine that you have a program that outputs a list of users in an HTML table like this:

	<!-- users.html -->
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
			<tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Michael Bourque</td>
				<td>michael@bostonphp.org</td>
			<tr>
			<tr>
				<td>2</td>
				<td>Gene Babon</td>
				<td>gene@bostonphp.org</td>
			<tr>
		</tbody>
	</table>

You can do the same this with a foreach loop, with a more elegant solution:

	<?php // table.php
	
	// Store the values in an array
	$users[] = array( 1, 'Michael Bourque', 'michael@bostonphp.org');
	$users[] = array( 2, 'Gene Babon', 'gene@bostonphp.org');
	?>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
			<tr>
		</thead>
		<tbody>
			<?php foreach( $users AS $user ) : ?>
			<tr>
				<?php foreach( $user AS $value ) : ?>
				<td><?php echo $value; ?></td>
				<?php endforeach; ?>
			<tr>
			<?php endforeach; ?>
		</tbody>
	</table>

It may appear that we are using more lines of code, but this approach will scale as we have more and more data to display. Also the code above could be hooked up to a database to make the table more dynamic.

### How does this work?
The secret to this is the [*foreach* construct](http://us.php.net/manual/en/control-structures.foreach.php). This gives you the capability to loop over an array one by one and store the values returned by each array item. We are also adding another foreach construct within another. We first loop over $users and store each one as $user. Since $user is also an array, we loop over $user and echo each value found in the array.

#### Syntax
__foreach( array AS $value )__

Each time the array is looped over, it will store the array contents in $value. In our example, each array item contains another array, so we can extract the values from each returned array item.

### Try it yourself...
1. Get the code [here](https://github.com/bostonphp/PHP-Beginners-Book/blob/master/learning_php/samples/foreach.php).
2. Try adding more rows to the table by adding more data to the $users[] array.
3. Try changing the email address to be a mailto: link.
4. If your feeling ambitious, try to retrieve the values from a database.

## Variables
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

## Flow control

## Logic operators

### Ternary operator
One of the coolest tricks I like to show is the **Ternary Operator**. It's a big time saver, and will make your code look and feel more compact. I use it all the time.

#### Syntax:
__mixed__ ( test condition ) ? (expression1) : (expression2);

#### Example:
Consider the code below. It checks to see if the variable named $pocket is empty. If it is, then it will set the variable $needCash to true, otherwise $needCash is set to false.

	<?php // code snippet
		// Determine if user needs cash 
		if( empty( $pocket ) ) {
			$needCash = true;
		} else {
			$needCash = false;
		}
	?>

You can do the same thing with the **Ternary Operator** with fewer lines of code:

	<?php // code snippet
		// Determine if user needs cash 
		$needCash = ( empty( $pocket ) ) ? true : false;
	?>

Pretty cool huh? The Ternary Operator evaluates the *test condition*, if that is true, then *expression1* is returned, if the *test condition* is false, then *expression2* is returned. Because the Ternary Operator returns a result, you can assign the result to a variable like *$needCash*.

### Other examples
	<?php // code snippet
		$agreeToTerms = ( isset( $_POST['agreeToTerms'] ) && $_POST['agreeToTerms'] === 1 ) ? true : false;
	?>

A challenge... can you give me some more practical examples?

## Functions
Functions are the most amazing and useful things you will learn about programing. They are a way to reduce the repetiveness in your program, by creating a special mini program designed to do whatever you need. It's almost like creating your own little programming language! Once you understand it, you will find all sorts of uses.

For example, let's say that your developing a web application that uses php date() to print the date of various records in your database. You've embedded php's date function all over your site like this:
	
	...
	<td><?php echo date( 'd m Y', $created ); ?></td> 
	...

Let's assume that you have used this date function all over your code base in 20 different pages. Now let's assume that your client has asked you to change the date format from 'd m Y' to 'Y m d'. Now you have to go through all of your code looking for the code you need to change.

You could though just create your own date function and keep all the date format logic contained in one place.

	<?php // php code snippet
		// Returns date in a specified format
		function myDate( $date ) {
			return date( 'Y m d', $date );
		}
	?>

Now you can do something like this:

	<!-- php page using html -->
	...
	<td><?php echo myDate( $created ); ?></td> 
	...
	
We call all functions by using the name of the function and the parenthesis with values.

I hope your realizing how cool this is. We just created our own little program to do whatever we wanted. We use *return* to return the value to whatever called it. If we ever want to change the behaivor of this function, we only need to change it in once place.

Let's play with the example below a bit more, and add more capabilities to our function. Let's now say we want to use this same function to print the current date on the page using the same format of 'Y m d'. Rather than create a new function, we can extend it's behaivor.

	// Returns date in a specified format
	function myDate( $date = NULL ) {
		return date( 'Y m d', $date );
	}

All we did is add a default value the function setting the value of $date to NULL. NULL has a special meaning in PHP and means a value of nothing. So if you were to call the myDate() function without passing a value, then our function will assume it is NULL. Since the PHP date() function will return the current date if you omit the datestamp, then it will just return the current date.

	...
	<span>Today's date is <?php echo myDate( ); ?></span> 
	...
 
Let's create a few more functions and experiment. Say we are wanting a function that can add two numbers together. We can create our own function called addValues. 

	// Example function
	function addValues( $value1, $value2 ) { // Add two values together
		$total = $value1 + $value2;
		return $total;
	} // end add_values()

	print addValues( 1, 15 ); // returns 16

Try experimenting yourself and try creating your own functions. Try to enhance them with default values.

## Object Oriented Programming

## Chapter 10: Challenges
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

## Good practices
It is very important to keep your code and your projects in good shape. It's easy to take shortcuts, but I find you will pay the price later if you do not at least practice some best practices. Here are my favorite best practices I have developed to keep you organized.

## Code formatting
## Format
## Conventions

## Source code control
## Git
## Subversion
## Mercurial

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
