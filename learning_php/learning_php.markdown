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

## Loops
As a developer, I am very lazy. I cannot stand doing the same thing over and over and over again. I would much rather spend some extra time to avoid having to do something again and again. 

A powerful feature of PHP is looping. It will save you countless hours of typing, and allow you to make your code more flexible, scaleable, and more compact.

Let's say that you have a program that outputs an HTML table like this:

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

You can do the same this with a loop, with a more elegant solution:

	<?php // code snippet
	
	// Store the values in an array
	$users[] = array( 'id'=> 1, 'name' => 'Michael Bourque', 'email'=>'michael@bostonphp.org');
	$users[] = array( 'id'=> 2, 'name' => 'Gene Babon', 'email'=>'gene@bostonphp.org');
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

It may appear that we are using more lines of code, but this approach will scale as we have more and more data to present. Also the code above could be hooked up to a database to make the table more dynamic.

### Try it yourself...
Usign the new more dynamic table code, try adding more rows to the table by adding more data to the $users[] array.

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
Functions are the most amazing and useful things you will learn about programing. They are a way to reduce the repetiveness in your program, by creating a special mini program designed to do whatever you need. It's almost like creating your own programming language!

	// Example function
	function add_values( $value1, $value2 ) { // Add two values together
		$total = $value1 + $value2;
		return $total;
	} // end add_values()
	print add_values( 1, 15 ); // returns 16

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
