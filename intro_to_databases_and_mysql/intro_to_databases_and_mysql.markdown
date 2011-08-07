## MySQL/Databases - Why MySQL?

This chapter is written assuming that you, the user, have successfully installed the WAMP, XAMP, or MAMP packages. If you have not, please refer to the previous chapters entitled WAMP, XAMP, and MAMP configuration so that you can successfully test and implement the commands outlined in this tutorial. We will begin this chapter assuming that the reader has absolutely no knowledge of MySQL or databases.

### What are databases?

Let's begin our tutorial with our test subject, Lisa, who has a box of crayons. She wants to organize them so that anytime she catalogs something, those things will appear in the database as having a color attributed to that certain type of crayon. Since nobody had thought of arranging objects like this to date, she must use SQL to create this arrangement herself. 

*Databases help to organize things that haven't been thought of yet. They allow one to use their creativity to group things together in a meaningful way.*

Our second subject, Joe, collects rocks, baseball cards, and rocks. He puts his sports cars in a garage, his rocks in a box in the basement, and his baseball cards in plastic sleeves on a shelf in the living room. It would not make much sense for Joe to put them all in one place, as it would be hard to find any particular item. What if all of Joe's sports cars, rocks, and baseball cards were on the shelf in his living room? In addition to being very inconvenient to remove any one item from his living room, it would be very confusing as to what and how many items he had to begin with. The same principle applies to electronic data.

"Databases" are simply an organized collection of data, usually in electronic form. They are composed of smaller parts called "tables". These tables are composed of even smaller parts called "rows" and "columns" similar to what one would see in an Excel spreadsheet (or any spreadsheet for that matter). The columns section of each table declares the characteristics of each table while each row contains unique data for each element in the table. It sounds complicated but is actually quite simple. Take the example outlined below:

#### Table Rocks

 ID | Name | Location | Origin | Composition | Color 
:-----------|:------------|:------------ | :------ | :------ | :------
 01 | Obsidian | Basement | Mexico | Volcanic Glass | Black 

We can clearly see that the elements in this table have the six column properties defined as ID, Name, Location, Origin, Composition, and Color. The table has one row that characterizes a rock named "Obsidian" whose location is currently in the "Basement". It also claims that this rock is "Black" and composed of "Volcanic Glass". Other rocks can be added to this table making it easy to create a distinction and easy reference between our obsidian rock and other rocks in our collection such as diamonds, sandstones, and gold. Let's add these new elements to our previous table just to see what it looks like.

#### Table Rocks

 ID | Name | Location | Origin | Composition | Color 
:-----------|:------------|:------------ | :------ | :------ | :------
 01 | Obsidian | Basement | Mexico | Volcanic Glass | Black 
 02 | Diamond | Basement | Congo | Native Minerals | None 
 03 | Sandstone | Backyard | Mexico | Feldspar | Brown 
 04 | Gold | Basement | New Mexico | Gold | Gold 

See. There's nothing to worry about. As a review, let us go over the basic structure of the MySQL database with colorful metaphors.

If MySQL was a state...

* A database in MySQL would be a house in that state
* A table in the database would be a room in that house
* A row in the table would be an object belonging in that room

If MySQL was a chain of stores...

* A database in MySQL would be a single store in that chain
* A table in the database would be a type of product sold at that store (such as a fruit)
* A row in the table would be a specific product sold (such as an apple)

Try to think of it as a huge box holding lots of things organized into smaller and smaller boxes within it.

Here is a quick review of what we have learned.

1. Columns of a table hold different characteristics of elements in that table
2. Rows in a table hold different elements uniquely defined by the table's columns
3. Tables are just a collection of things that you want to keep track of.  
4. Databases are a collection of tables.

## MySQL/Databases - Where do I start?
Alright, you've made it through the last chapter. Are you proud of yourself? I sure am! Give yourself a pat on the back. This next chapter will be a tad more difficult as it requires the user to do other things as well as read this helpful instruction manual. 

#### Navigating to your WAMP program
Please follow the steps outlined below:

1. There should be a shortcut on the desktop of your computer. It should look like a big pink "W" surrounded by a box. Double click on it. 
2. If it is not there, open up your start menu and search for WAMP. Find the icon described above, and click on it in the fashion that your prefer. Most popular people prefer the double click. Feel free to click in your own special way if you don't feel like conforming to their norms.
3. If you can remember were you put it, please disregard steps 1 and 2

Nice, I knew you could do it. Now it's time to...

#### Open your localhost!!!
Please follow the steps outlined below:

1. Click and open your favorite browser. It should not be Internet Explorer.
2. Type or paste the word **localhost** into where you would normally type a website address, and press enter.

#### Congratulations! You did it!
At this point you should see a page that says **XAMPP for Windows** in the top left corner, with a list of commands down the left side. Click the word **phpMyAdmin** on the navigation bar on the left hand side of the screen. 

*Was there an error? Don't panic. Just type in **https://localhost**. You should now be able to click on **phpMyAdmin** without any more hassles. If there is still a problem, you may have to uninstall and reinstall WAMP*

### Using phpMyAdmin
Alright, by now you should be on a tacky dark blue and grey screen with **phpMyAdmin** on the upper left side. At the top of the screen, you should see a bunch of tabs directly underneath the word **localhost**. Click on the **SQL** tab.

*Because this tutorial focuses mainly on programming with embedded SQL in PHP, we will not be using any of the fun, efficient, and easy to use syntax phpMyAdmin offers. This is mainly because you will not actually be using this framework for the selects, inserts, updates, and deletes implemented in your awesome webpage. You will use these commands directly in the php framework of your choice.*

You should see a rectangular text area in front of you with a button labeled **go** in the bottom right corner of the box. Type the following command into the text area and press **go**.

	CREATE DATABASE grocery_store; 

If you typed in the command right, you will have created the database **grocery_store** in your MySQL database.

Go back to the **SQL** tab and type the command:

	USE grocery_store;

*This tells the MySQL database that you are going to work in the database **grocery_store** until you say otherwise. You will work within this structure throughout the next few chapters of this book.*

You have just created the database of a single fictional grocery store. We will develop this more in the next chapter.

## MySQL/Databases - Defining our first table
Up until this point, you have created your database, and figured out the general structure of MySQL. Now you will need to put a table inside of the database you have created. In the case of our **grocery_store** database we will need to define the table as some sort of product sold in the grocery store. For this example, we will focus on fruits.

*Before one creates any table, he or she should consider what they are putting into the table in the first place. Try to pick things that are unique to most elements in the table and distinguish them meaningfully from other elements.*

### What defines a fruit?
I can think of a few properties separating one fruit from other fruits in a grocery store.

* Fruit store ID
* Fruit name
* Fruit color
* Fruit taste
* Fruit texture
* Fruit price
* Fruit quantity
* Fruit shelf-life
* Fruit last purchased
* Fruit purchased quantity

### Datatypes

That should be enough to at least let us get started. Now we have to figure out what kind of data we are going to put in these categories. For learning purposes, there are really only three types of data you will need to use. They are:

* Numbers
* Characters
* Dates

Numbers, as the name probably gives away, are any kind of numeric information. Will you need to use any kind of decimals for the data that you are going to store? In that case you will need to use the datatype **decimal** or **float**. If not, you can use the datatype **int** or **bigint** (which takes up more space, but can handle bigger numbers).

Characters are any kind of way to representation of a letter, word, or series of words. For example the letter **A** and the phrase **Anything goes in SQL world** would both be of a character type. Use the datatype **varchar(n)** to define a column that you would like to represent with a character. Substitute the **n** in **varchar(n)** with the maximum amount of letters a column in your table can have (up to 255). Spaces, tabs, and newlines in a paragraph all count as a characters.

Dates are a way to store dates in the database. Do you just want to store the dates and not the time? Use the datatype **date**. Do you want to store the time and not the date? Use the datatype **time**. Want to store the date and the time? Use the datatype **datetime**.

Let's look back at our characteristics of fruits to decide what kind of datatype they should be.

* Fruit store ID - Consists of numbers without a decimal point. **int**
* Fruit name - Consists of a few letters. **varchar(50)**
* Fruit color - Consists of few letters. **varchar(50)**
* Fruit taste - Consists of more letters. **varchar(100)**
* Fruit texture - Consists of more letters. **varchar(100)**
* Fruit price - Consists of numbers with a decimal point. **decimal(10,2)**
* Fruit quantity - Consists of numbers without a decimal point. **int**
* Fruit shelf-life - Could be a matter of hours to a matter of days. Since this number does not define a specific date or time, we will define it in the number of hours it takes for the fruit to expire. **int**
* Fruit last purchased - A certain date and time when the fruit was last bought. **datetime**
* Fruit purchased quantity - Consists of numbers without a decimal point. **int**

That about sums up the table that we need to create. Now we just have to put these columns in the correct order. Since the **Fruit store ID** is the only truly unique element in the list, we will make this the "Primary Key".

*Defining a column with a primary key means that the column will only be able to have unique values (i.e. nothing can repeat itself). Some examples of this in everyday life are license plate numbers, credit card numbers, and social security numbers. All of these values work to make sure that somebody can't impersonate someone else, and allow them access to certain privileges that are not entitled to them. The same concept applies to tables in databases. Whenever possible, it is good practice to make sure that the table you are creating contains some form of primary key, to give something to uniquely identify a row.*

### How do I make a table with this?
Good question. It may seem like I am rambling on a bit here, but I assure you that my writing has some purpose. In your window with phpMyAdmin, click on the **SQL** tab to bring up the command box again. Make sure that you see **localhost -> grocery_store** above the box. If you do not, just click on the **grocery_store** link on the right side and then the **SQL** tab to get yourself there. 

Type the following command into the box and click **go**. 

     CREATE TABLE FRUITS(ID int PRIMARY KEY, NAME varchar(50), 
     COLOR varchar(50), TASTE varchar(100), TEXTURE varchar(100), 
     PRICE decimal(10,2), QUANTITY int, SHELF_LIFE int, LAST_PURCHASED datetime, 
     PURCHASED_QUANTITY int);

Congratulations! You have created your very first table.

## MySQL/Databases - INSERT and SELECT

### INSERT Statements

Now it is time to actually put something into our table. Click on the SQL tab again, type the following command, and press enter.

     INSERT INTO FRUITS VALUES (001,"Bananas","Yellow",
     "Sweet Dry","Spongy",".29",100,72,"2011-05-08 
     12:00:00",100);

*The format for datetime is YYYY-MM-DD HH:MM:SS*

This should add the row **"Banana"** to your table. Click on the SQL tab again, and send the next command to the database.

     INSERT INTO FRUITS VALUES (001,"Strawberries",
     "Red","Tangy Moist","Smooth",".15",50,48,
     "2011-05-08 12:00:00",50);

Did it work? It shouldn't have. If you remember, we had defined the first column **"ID"** as the Primary Key. This means that every value in the column must be unique. We forgot to change this value to a different number after we defined bananas. Let's do that now.

     INSERT INTO FRUITS VALUES (002,"Strawberries",
     "Red","Tangy Moist","Smooth",".15",50,48,
     "2011-05-08 12:00:00",50);

And add one more row to our table.

     INSERT INTO FRUITS VALUES (003,"Raspberries",
     "Red","Tangy Moist","Juicy",".25",60,92,
     "2011-05-09 10:15:00",200);

Remember the syntax for inserting into a table is as follows:

*INSERT INTO {Name of table} VALUES ({Number of values defined when the table was created in the correct order});*

Don't worry if you mess up. MySQL will warn and prevent you from running incorrect commands.

*You can also specify which columns you would like to insert instead of inserting them all at once. This will be discussed in greater detail in the JOINS chapter.*

To insert more than one value into a table with one command, simply separate each group of values by a comma. Here is an example of this with the rows that we have already inserted.

     INSERT INTO FRUITS VALUES (001,"Bananas","Yellow",
     "Sweet Dry","Spongy",".29",100,72,"2011-05-08 
     12:00:00",100),(002,"Strawberries",
     "Red","Tangy Moist","Smooth",".15",50,48,
     "2011-05-08 12:00:00",50),(003,"Raspberries",
     "Red","Tangy Moist","Juicy",".25",60,92,
     "2011-05-09 10:15:00",200);

### SELECT Statements

The syntax of MySQL is pretty straight forward. We have seen so far to use INSERT statements to insert something into a table and CREATE statements to create a brand new table (or database). It doesn't take much imagination to figure out that the SELECT statement selects a value or group of values from a table and return that value(s) to the user. 

Let's start out with a simple SELECT statement. In phpMyAdmin click on the **grocery_store** icon on the left side and then click on the **SQL** tab at the top of the page. Type in the following command and press **Go**.

     SELECT * FROM fruits;

*In general, the "*" in computer science refers to "all", so the result of the command above should return all rows and columns of the table **fruits**.* 

If you typed out this statement correctly, you should see the entire contents of your table **fruits**. To select only certain columns of a table, type out all of the columns you want to see in that table separated by a comma. Type in the following command and press **Go**.

     SELECT name,price,quantity FROM fruits;

This kind of syntax (where the return columns are specified) becomes especially useful when dealing with the conditional **WHERE** statement described in the next chapter.

## MySQL/Databases - WHERE and ORDER BY

### WHERE Statements

So far you have learned how to get blocks of information from a table, but you still have no idea how to turn those results into something relevant such as selecting all of the fruit prices greater than 25 cents, or displaying all of the "Red" fruits. This is where the **WHERE** statement comes into play. The **WHERE** statement gives a specific set of criteria to the MySQL database so that the results are much more controlled and relevant to what you want. For example, say that you want to select the names of all of the fruits with a 'Red' color. You would want to type in the following statement in the compiler.

     SELECT name FROM fruits WHERE color = 'Red';

The results should be every fruit labeled **Red** in the database. 

*Remember to surround a string with quotations or parentheses every time you wish to use them in SQL statements. They will not work otherwise.*

Now say that we want to do something a bit more complicated and select a fruit whose price is greater than 25 cents. For this, you need to think back to geometry and remember your inequality modifiers. Don't remember what they are? Don't worry, I have provided a helpful table below.

 Operation | Symbol 
:-----------|:------------
 Equal To | = 
 Not Equal To | != 
 Greater Than | > 
 Less Than | <
 Greater Than Or Equal To | >= 
 Less Than Or Equal To | <= 

To find all of the fruits with a price that is greater than 25 cents, it is fairly obvious that we need to use the **Greater Than** operator defined above. Type the following command into your compiler and press **Go**.

    SELECT name FROM fruits WHERE price > 0.25;

This should select all of the fruits with a price greater than 25 cents. Mainly bananas. To see all of the fruits with prices greater than 25 cents, including 25 cents, you will need to use the **Greater Than Or Equal To** operator defined above. Type the following command into the compiler and press **Go**.

    SELECT name FROM fruits WHERE price >= 0.25;

The previous statement should have selected raspberries as well as bananas

*Remember that the **WHERE** command always goes after the **SELECT** statement in MySQL 

### ORDER BY

The **ORDER BY** statement is probably one of the easiest commands to learn in MySQL. You can attach it at the end of any **SELECT** statement to put the results in the order of the column that you specify.

     SELECT name FROM fruits ORDER BY id asc;

The above statement should display the fruits in order of the column 'id' from smallest to largest. This is because the modifier **asc**, or **ascending**, is placed at the end of the command.

     SELECT name FROM fruits ORDER BY id desc;

The above statement will display the fruits in order of the column 'id' from largest to smallest. This is what happens when the **desc**, or **descending**, modifier is used. 

The **ORDER BY** modifier can also be used with a **WHERE** statement like so:

     SELECT name FROM fruits WHERE price >= 0.25 ORDER BY id asc;

Just remember that the **WHERE** command ALWAYS goes before the **ORDER BY** command. If you mix them up, you will get an error. 

To limit how many results you receive in an ORDER BY statement, use the limit clause after you write 'asc' or 'desc'. To pick only the first name alphabetically of one of the fruits, we would simply write;

     SELECT name FROM fruits ORDER BY name asc limit 1;

The number after limit determines how many results are returned.  

## MySQL/Databases - Static Functions and GROUP BY

### Static Functions

I know that I have gone a bit more quickly than usual in the last few chapters, but will to slow things down for a slightly more complicated part of MySQL programming, **Static Functions**. Below you will find a list of the most common MySQL static functions and their purpose. Afterwards, I will show you how to use them.

 Function | Purpose 
:-----------|:------------
 avg() | Returns the average value of the numbers in a column
 count() | Returns the number of values in a column
 first() | Returns the first value in a column
 last() | Returns the last value in a column
 max() | Returns the maximum value in a column
 min() | Returns the minimum value in a column
 sum() | Returns the sum of all numbers in a column
greatest() | Selects the greatest of two numbers
least() | Selects the lesser of two numbers
------- | --------------------
 ucase() | Returns the results in upper case
 lcase() | Returns the results in lower case
 length() | Returns the length of a value in a specified field (number of letters in a word/phrase)
 round() | Rounds the results to the number of places specified
 now() | Returns the server's current date and time
 mid() | Returns a certain number of characters from a column
 format() | Returns a field in the format specified (YYYY-MM-DD)

Wow. That sure is a lot of new things to learn. Where would one even begin to use commands that are so complicated? Good question. Let me give you some examples that could be applied to the database that we have already made.

* You would like to find out which color fruits, on average, are the most expensive.
* You would like to find out the sum of all of the fruits in your store
* You would like to know how many different types of fruits you own
* You would like to return the first three letters of each fruits name, so that you can index them efficiently in store

To do **MOST** of these things, we must become familiar with another command that you will use often.

### GROUP BY

The **GROUP BY** function is only used with aggregate functions, or functions that *Group* two or more things together. If you look at the chart above, you will see that everything above the hyphen will need the **GROUP BY** statement in order to function. Instead of confusing you more with complicated definitions, I find that it is usually best to dive right into the hard work and get it over with. Let us start with the first of the test cases above and work our way down to the end so that you can get a feel for the new commands.

*1) You would like to find out which color fruits, on average, are the most expensive.*

First, we need to see what columns the question is asking us to use. From a quick glance, we can see that we will need to use the columns **color** and **price** in our fruits table. We can also see that we will have to take the average of the fruit price. We will **GROUP BY** color because we want to connect the **price** column to the **color** column in some way. 

*Don't worry if this is still confusing. I find the often the best way to learn something is to practice it over and over again. You may hate yourself while you sit inside practicing mundane SQL commands when it is such a beautiful day outside (go look outside for a second. I'll wait), but think about this. I wrote this guide entirely for free. The weather outside is currently 78 degrees and sunny. I haven't showered in days. All you have to do is actually read and practice this tutorial. Stop complaining.* 

     SELECT color,avg(price) FROM fruits GROUP BY color;

*A good rule of thumb to use is that the GROUP BY statements are most often used on a variable not used in a function. In this case since price was used in a function in the statement, the results need to be grouped by color.*

Did you get **yellow** as having a higher average price? Actually the answer was **red**, you should go back a rerun the command again, you probably typed it in wrong... I'm just kidding the answer was **yellow**. Onto the next problem.

*2) You would like to find out the sum of all of the fruits in your store.*

Well, OK. We know that we need to use the quantity column (where the number of fruits are stored) and SUM() function (to add up the numbers) in the table above for this next question. The only problem I see is that we have nothing to use in the GROUP BY statement, and didn't I say that we always need to use the GROUP BY statement with functions like these? (See above).

If you had looked, you would have realized that I did not say that one has to use GROUP BY statements all of the time, but simply in most cases. This example is one of the exceptions. Since it is only returning one row, you don't actually need any GROUP BY statement to clarify how the rows will be divided.

     SELECT sum(quantity) FROM fruits;

You should have gotten 210. I'm not lying this time.

*3) You would like to know how many different types of fruits you own*

It would sure be awesome to have some kind of **counting** function so that we could simply *count* the number of **ids** in our table... I can't remember, do we have one of those functions we can use? Something to **count** things? If we did, we could always just run a statement like:

     SELECT count(id) FROM fruits;

and be done with it.

*4)You would like to return the first three letters of each fruits name, so that you can index them efficiently in store*

If you look at the table above, you will find the mid() function that returns a certain amount of characters from the data given to it. Unlike the other functions we have worked with, this function requires a bit more effort in order to run smoothly. The syntax requires that you enter the name of the variable, starting position, and length of the string into the function separated by commas. Since we want to grab the first three letters of the fruit name, I suggest that we arrange our function like so: **mid(name,1,3)**. I added the column **name** next to our function so that we can see the new results right next to the original results.

     SELECT name, mid(name,1,3) FROM fruits;

### Embedded Functions

Functions getting in bed with each other? What is this, some kind of sick joke? Not really

An embedded function is a function(s) within another function. While this may sound confusing at first, keep in mind that I am here to put your mind at ease. 

Assuming that you have done some kind of algebra before reading this tutorial, it would be safe to say that you would know how to do the following math problem:

     (2*(9-4)) = X

From our knowledge, we know to work with the least operator first, which happens to be the minus sign. The result would be:

     (2*(5)) = X  

Now we take that 5 out of the parenthesis and multiply it by 2, giving us:

     10 = X

This is exactly how embedded functions work in MySQL. Look at the following example:

     SELECT greatest(max(price),min(quantity)) FROM fruits

This statement will return the greatest price after comparing the max and min prices. 

*Obviously the max price will always be returned. Bear with me. This is an example.*

Now look at what MySQL does as it tries to figure out your command. It first returns the results from the max and min functions:

     SELECT greatest(.29,.15) FROM fruits

Then it runs the greatest function on the results

     SELECT .29 FROM fruits

Now if you were a smart programmer, you would realize that you could put an infinite amount of functions into any other functions. You could even use **SELECT** statements embedded in functions, or even other select statements! Look at the next problem closely and ask yourself exactly what it does.

     SELECT price FROM fruits WHERE price = greatest((SELECT price FROM fruits ORDER BY price asc limit 1),(SELECT price FROM fruits ORDER BY price desc limit 1));

Give up? It does exactly the same thing as the previous example. Just using **SELECT** statements to return the values to the greatest function. Remember that **limit** only returns as many results as you say it can (in this case one). So, if we arrange the columns from lowest to highest, and highest to lowest, and only take the first results, it would be exactly the same as using the max and min statements. Let's go through this slowly to figure out exactly what we are doing.

     SELECT price FROM fruits WHERE price = greatest(({.29,.15,.25 } ORDER BY price asc limit 1)
     ,({.29,.15,.25 } ORDER BY price desc limit 1));

     SELECT price FROM fruits WHERE price = greatest(({.29,.25,.15}limit 1),({.15,.25,.29} limit 1));

     SELECT price FROM fruits WHERE price = greatest(.29,.15);

     SELECT price FROM fruits WHERE price = .29;

     .29

As you can see, we get to the exact same result with a completely different method. You do not have to employ these styles of coding, but it will certainly help you in the long run.

### Now for some problems

I know that you have been dreading doing any real work for a while now, but there is just some things that have to be practiced. Unfortunately, you probably won't be able to understand the much more complicated topics in the next few chapters if you do not understand what you have read so far. To make things interesting, please copy, paste, and run the following code in your MySQL command box.

     INSERT INTO FRUITS VALUES (004,"Peaches","Yellow",
     "Sweet Moist","Juicy",".17",120,72,"2011-05-08 
     12:00:00",200);  
     INSERT INTO FRUITS VALUES (005,"Pineapples","Yellow",
     "Sweet Moist","Fibrous",".34",230,24,"2011-05-09 
     11:00:00",350);  
     INSERT INTO FRUITS VALUES (006,"Pears","Green",
     "Tangy Moist","Smooth",".23",30,48,"2011-05-10 
     10:00:00",160);  
     INSERT INTO FRUITS VALUES (007,"Mangos","Yellow",
     "Bland Dry","Spongy",".31",20,108,"2011-05-07 
     9:00:00",80);  

### Questions

*Don't cheat. If you actually want to learn this, you are only hurting yourself.*

*1) Select the sum of each fruit by color*

*2) Select the names of the fruits in alphabetical order*

*3) Select the maximum and minimum amount of fruits purchased*

**Hint: You have to use two functions you have not used before**

*4) Find the color of fruit with the longest average name length*

**Hint: This is a tricky one. It will require you to put a function within a function. First figure out what you need to do, and then see if there are any functions to help you out**

## MySQL/Databases - HAVING

### HAVING

First, if you skipped the question part of the last chapter, like I told you not to, please scroll up and copy the **INSERT** commands. You will need these rows for future "exercises".

Next, I bet you were probably wondering why I spent a whole chapter on the **WHERE** statement, and haven't brought it up since. It's because it would make things a lot more confusing if I had made you practice with it before you learned the **HAVING** statement.

The **HAVING** statement would be, for all intensive purposes, the exact same statement as **WHERE**, were it not for two things. The **HAVING** statement is only used with functions, while the **WHERE** statement is only used with variables. The **HAVING** statement goes right after the **GROUP BY** statement while the *WHERE** statement goes right before it. Some examples:

 Dilemma | Need 
:-----------|:------------
 Sum(quantity) > 50 | HAVING 
 Avg(quantity) < 25  | HAVING 
 Color < 'Mauve'  | WHERE
 Quantity < 25  | WHERE 
 color < 'Yellow' and Avg(quantity) < 50  | HAVING and WHERE

Let's start off with the last example in our table, as it gives a good layout of what we will need to use in the future. It says that we want all of the colors whose average quantity is less than 50 and are above 'Yellow' in the alphabet. The query should read something like this.

     SELECT color,Avg(quantity) FROM fruits WHERE color < 'Yellow' GROUP BY color HAVING Avg(quantity) < 50;
 
Wow. I know what I'm doing and that still looks scary. Let's try a few more examples just to get into the habit of knowing when to use these two commands.

*1) Return the colors of the fruits with quantities greater than 100 including 100*

Since you do not have to use any functions for this statement, you will need the **WHERE** statement

     SELECT color,quantity FROM fruits WHERE quantity >= 100;

*2) Return the colors of fruits whose combined quantities are greater than 100 including 100*

I see the words 'combined quantities' in the question, which means that we are going to have to take the sum of the column quantities. As usual we are taking the sum of each fruit color. 

     SELECT color,sum(quantity) FROM fruits GROUP BY color HAVING sum(quantity) >= 100;

*3) Return the names and colors of fruits whose greatest names within that color are greater than or equal to 'Mango'*

The result should return the fruit name closest to 'Z' for each color as long as it is below the word 'Mango', in which case it will not return anything.

     SELECT color,max(name) FROM fruits GROUP BY color HAVING max(name) >= 'Mango';

*4) Return the names and colors of fruits whose greatest name within that color is greater than or equal to 'Mango' and whose color is not Red*

This is a derivation on the last problem. We just need to put a **WHERE** statement between the **FROM** and **GROUP BY** statements in order to make this work.

     SELECT color,max(name) FROM fruits WHERE color != 'Red' GROUP BY color HAVING max(name) >= 'Mango';

*Remember, the '!=' symbol means 'not equal to' in computer science language. For future reference, the '!' symbol simply means 'not'.*

## MySQL/Databases - UPDATE and ALTER

### UPDATE

How are you doing so far? Tired from all of the sweet programming you have been doing lately? Thinking about taking a break? Well think again. I want to tell you about an awesome statement called **UPDATE**. I put this towards the middle of the tutorial because it provides a break from the more complicated functions.

What does the **UPDATE** command do exactly? Why, it updates a value or values in a table with new values. Besides the **SELECT** statement, you will use **UPDATE** far more often than any other kind of statement. The syntax is as follows:

     UPDATE {Table Name} SET {Value1 = Value2} WHERE {Value3 Inequality Value4};

Let's say we messed up and accidentally labeled our 'Blueberries' 'Peaches' in the database. With the **UPDATE** statement, we could easily fix our mistake in a few seconds. 

     UPDATE fruits SET name = 'Blueberries' , color = 'Blue' WHERE name = 'Peaches';

Now let's say that our bananas went bad, and every single one of them turned Brown. How would you update that in our table?

     UPDATE fruits SET color = 'Brown' WHERE name = 'Bananas';

Now say that we just received a huge shipment of bananas since the old shipment went bad. Only our supplier mistook bananas to mean plantains and send us plantains instead (he's family). Now we have to update the name of the fruit, the color, and the date (because we just got them) in the database.

     UPDATE fruits SET color = 'Green', name = 'Plantains', last_purchased = now() WHERE name = 'Bananas'; 

*Remember, the function now() returns the current server's date and time to whatever variable it is applied to*

### ALTER

The **ALTER** command is used to alter column, table, and database properties without having to delete and remake them. There really isn't much to say about this command. If you plan things out right the first time you will never have to use it. But hey, we're all human right? 

Over the course of this tutorial I have had to use the **ALTER** command a few times in order to fix the multiple spelling mistakes throughout my column naming. Let's do a few quick examples, just in case, then never deal with this statement again. The syntax for the **ALTER** statement is as follows:

     ALTER {TABLE/DATABASE} {NAME} {CHANGE/ADD/DROP} {OLD NAME} {NEW NAME} {If column, column properties go here};

First, let's create a new column in our table, because we found something else that we want to organize. All that is required, is to specify the table in which you would like to add your column, and the data type that the column is.

*Remember, datatypes fall into the category of numbers, letters, and dates. See the chapter where we defined our first table for a more detailed explanation.*

     ALTER TABLE fruits ADD unnecessary_column int;

Notice that after you create a column, all of the rows will be filled with null values indicating that there is nothing there. This can be corrected with **UPDATE** statements discussed in the last section.

Let's say that the column name doesn't quite convey what we want to represent in our database, and we want to change it. We just need to tell the MySQL server the table name, old column name, and the column name that you would like to change it to.

*Remember that you will need to add the datatype for each column that you change.*

      ALTER TABLE fruits CHANGE unnecessary_column other_column int;

Now we don't want to have the column that we created anymore. It seems like it contains a lot of unnecessary information and we would like to get rid of it. All we would have to do is run the following command.

     ALTER TABLE fruits DROP other_column;

The database will give you a warning to make sure that you actually want to delete the column. Click OK.

You did it! The column is gone, and you didn't screw anything up (hopefully). Because the column was being deleted anyways, we did not have to define the datatype in the column before we dropped it.

## MySQL/Databases - AND/OR

The **AND** and **OR** modifiers are used **ONLY** in conjunction with the **HAVING** and **WHERE** statements discussed previously in this tutorial. To understand exactly what **AND** and **OR** statements do, we first need to dissect what exactly happens when we use **HAVING** and **WHERE** statements.

Here is an example of a **WHERE** statement:

    SELECT name FROM fruits WHERE color = 'Red';

This statement implies that the **SELECT** statement is looking to return the name of any row that has a color equal to 'Red'. If the color is not equal to 'Red', the statement returns **false** and nothing is returned. If the color is equal to 'Red', the statement returns **true**. 

The AND and OR statements work along these principles. They join together two or more conditions, such as color = 'Red', to make a bigger condition. For the AND statement to return **true** all of the conditions in the statement must individually return **true**. For the OR statement to return **true** only one of the conditions in the statement must return **true**. An example of this is below.

Try out the two statements below individually. Which one do you think will give you the most results?

     SELECT name FROM fruits WHERE (color = 'Red') AND (texture = 'Juicy');

     SELECT name FROM fruits WHERE (color = 'Red') OR (texture = 'Juicy');

*Although they aren't necessarily needed, I find that it is easier to enclose my different conditions in parenthesis to avoid any unnecessary confusion.*

If you haven't figured it out yet, the **OR** statement will yield the most results. This is because **OR** returns the red fruits, the juicy fruits, and the juicy red fruits. The **AND** statement will only return the juicy red fruits.

Let's first try out a few examples, before I will give you some practice problems to see what you have learned in the past few sections.

*1) Return the names of the fruits that have a spongy texture and a price above $0.30*

This problem is almost exactly like the examples that we had before, but working with different columns. We can see that we will need to use the **AND** statement with the texture and price columns. The rest is fairly straight forward.

     SELECT name FROM fruits WHERE (texture = 'Spongy') AND (price > 0.30);

The result should be 'Mangos'

*2) Return the type of textured fruit with an average price greater than $0.32 or a combined quantity less than 60*

This problem is a bit more difficult than the last one, mainly because we will have to use the more difficult **HAVING** statement in order to execute our queries. We can see that we will need the **OR** statement as well as the price and quantity columns for this problem. The **SELECT** statement also needs to be grouped by the texture column, since that is what we are comparing. 

*Remember that you will **GROUP BY** the column in the **SELECT** statement that is not part of any functions. In this case, it will be the texture column.*

     SELECT texture, avg(price),sum(quantity) FROM fruits GROUP BY texture HAVING (avg(price) > 0.32) OR (sum(quantity) < 60);

The result should return the fibrous fruits. 

### Questions

*Don't cheat. If you actually want to learn this, you are only hurting yourself.*

*5) Return the names of all of the yellow fruits whose names begin with a 'P'.*

*6) Return the names of all of the fruits that have a price over $0.30 and a spongy texture, or a price under $0.20 and a juicy texture.*

*7) Make a new column named 'user' of type varchar(100) in the fruits table.*

*8) Make every single value in the 'user' column the value 'Toby';*

*9) Delete the column 'user' in the fruits table.*

## MySQL/Databases - CONSTRAINTS and JOINS

### JOINS INTRO

So far we have just worked with one table in our queries in order to get the information that we need, but what if we have two or more tables? Do we have to query each of the tables individually? The answer is no, not usually, but you do need to think about a few things. 

The first is, what do the two tables have in common? Do they have the same user names we can query? Are they both arranged by colors, dates, or prices? In order to join two tables, you *cough* usually need to find some sort of commonality between them.

*Commonality means "something in common".*

The second is, if they don't have anything in common, what do you need to do to give them something in common? Do you remember the example from the very start of the tutorial when we were referencing Joe's cars, rocks, and baseball cards? What do you think these three things would have in common? I can think of a few off the top of my head including: a color, a size, a weight, a height, a name, a value, a terminal velocity, etc. Without these columns in each of the tables, we would be unable to answer any of the silly questions that come into our heads.

Which is more expensive? A brand new Porsche, or my ten most valuable baseball cards? 

If I stacked all of my baseball cards in a line, how many rocks would I have to stack to go an equal distance?

Which rocks will match my new Ford pickup's color?

 ### Creating Our New Table with Constraints

In order to join two tables, we will need to add a second table to our grocery store database. Copy the code below into the SQL tab, and click **go**.

     CREATE TABLE VEGGIES(ID int PRIMARY KEY NOT NULL AUTO_INCREMENT, NAME varchar(50) 
     NOT NULL, COLOR varchar(50), TASTE varchar(100), TEXTURE varchar(100), PRICE 
     decimal(10,2), QUANTITY int DEFAULT 0, SHELF_LIFE int, LAST_PURCHASED datetime, 
     PURCHASED_QUANTITY int, CHECK (PRICE > 0));

Look closely at the table we have just created. Do you notice anything different compared to the fruits table we created earlier? If you didn't, you should look again. What we added to our table would be called **CONSTRAINTS**.

**CONSTRAINTS** are simply commands that one adds to their table to make sure that people don't screw up them up further down the line. Sometimes **CONSTRAINTS** can even make our lives easier. Take, for example, the **AUTO_INCREMENT CONSTRAINT** we added to our table. This tells the MySQL compiler to add one to this column each time a new row is created. This means that we no longer have to insert those pesky numbers ourselves each time we want to create a new row!

*For those that don't know too much about computing, a compiler is a way for the computer to translate what you are saying into computer code. Kind of like what a translator does when you go to a foreign country with a different language.*

 Here are a list of the most common **CONSTRAINTS**, and what they do. 

*Remember, all **CONSTRAINTS** should be inserted after the column name and datatype like in the example above. Not doing so will return an error. The only exception to this rule it the **CHECK CONSTRAINT** which is always inserted at the end in MySQL tables.*

CONSTRAINT | Function 
:-----------|:------------
NOT NULL | Prevents any NULL value from being placed in the column
PRIMARY KEY | Makes sure that every value is unique in the column. Each table needs to have one of these. You can still create a table without a PRIMARY KEY, but it is bad form. There can *"be only one"* column defined by a PRIMARY KEY.
UNIQUE | Makes sure that every value is unique in the column. Unlike the PRIMARY KEY, there can be more than one column defined as 'UNIQUE' in a table
DEFAULT | Used to define a value if one has not been inserted into the database. We used it above to insert 0 as a default value if nothing is put into the column 'price'.
AUTO_INCREMENT | Used to automatically add a number to the last rows value when a new row is created. The default value for AUTO_INCREMENT is 1, but can be changed by the command AUTO_INCREMENT = n, where n is the number by which you would like to increment by. For example, if the last row had the value 6, and my AUTO_INCREMENT is set to 2, my next row would be 8.
CHECK | Used to make sure of a condition before a new row can be added. We implemented it in our new table to make sure that fruits weren't being given away for free before they were inserted into the table.

Not too hard right? Think of **CONSTRAINTS** as a little reminder that help you as you screw up from time to time. 

### Adding Value to Our Table

Now let's add some values to our table so that we can work with JOINS at our leisure. Copy and paste the following commands into the SQL command box and click enter. 

     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Cucumbers'
     ,'Green','Bland Moist','Juicy',.40,120, 24,'2011-05-06 02:00:00',150);
     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Potatoes'
     ,'Brown','Bland Dry','Spongy',.35,100, 48,'2011-05-07 03:00:00',180);
     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Squash',
     'Yellow','Bland Moist','Fibrous',.30,80, 96,'2011-05-08 04:00:00',250);
     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Pumpkins',
     'Orange','Bland Moist','Fibrous',.25,60, 108,'2011-05-09 05:00:00',350);
     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Lettuce',
     'Green','Bland Moist','Fibrous',.20,40, 78,'2011-05-10 09:00:00',70);
     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Eggplants',
     'Purple','Bland Moist','Spongy',.15,140, 164,'2011-05-11 10:00:00',190);
     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Tomatoes',
     'Red','Tangy Moist','Juicy',.45,160, 72,'2011-05-12 11:00:00',200);

You could also insert the same values into the database in the following way.

     INSERT INTO VEGGIES ( NAME, COLOR, TASTE, TEXTURE, PRICE, QUANTITY, 
     SHELF_LIFE, LAST_PURCHASED, PURCHASED_QUANTITY ) VALUES ('Cucumbers'
     ,'Green','Bland Moist','Juicy',.40,120, 24,'2011-05-06 02:00:00',150),('Potatoes'
     ,'Brown','Bland Dry','Spongy',.35,100, 48,'2011-05-07 03:00:00',180),('Squash',
     'Yellow','Bland Moist','Fibrous',.30,80, 96,'2011-05-08 04:00:00',250),('Pumpkins',
     'Orange','Bland Moist','Fibrous',.25,60, 108,'2011-05-09 05:00:00',350),('Lettuce',
     'Green','Bland Moist','Fibrous',.20,40, 78,'2011-05-10 09:00:00',70),('Eggplants',
     'Purple','Bland Moist','Spongy',.15,140, 164,'2011-05-11 10:00:00',190),('Tomatoes',
     'Red','Tangy Moist','Juicy',.45,160, 72,'2011-05-12 11:00:00',200);

Why do you think this works? See the **INSERT** section again if you are having trouble understanding.

### Working with JOINS

Phew! That took a long time to set up. Now we can finally play with the **JOINS**. A **JOIN** is basically a **SELECT** statement with two or more tables instead of just one. To select an individual column, write the table name and column name separated by a period. Think of it as if your two tables are one big table, and you are just writing a normal **SELECT** statement. 

*MySQL used to have an actual statement called JOIN, but it has since been thrown away in favor of the new syntax which is much easier to use. We still call the operation JOIN in its memory.*

For example, to return all of the foods with the same price in both tables, one simply needs to write;

     SELECT veggies.name, fruits.name FROM fruits, veggies WHERE fruits.price = veggies.price;

To return all of the foods with the same color

     SELECT veggies.name, fruits.name FROM fruits, veggies WHERE fruits.color = veggies.color;

That's all there is to it. We will discuss these concepts in more depth in the next chapter.

## MySQL/Databases - CAST, and 'as' 

### CAST and 'as'

So you think you have **JOINS** down cold? Need a bit of a challenge? No problem. In this chapter you will learn a few more a techniques you will need to master **JOINS**.

*Remember that you will almost always need some way to link the two tables together be it in a WHERE statement or HAVING statement. Without either one of these, you will get gibberish returned to you.

To begin, we will go back to a basic table and work our way back to **JOINS**. Sometimes the results that you return with **SELECT** statements aren't exactly in the format that you would like them to be. Take the next query for example:

     SELECT AVG(quantity) FROM veggies;

The result is technically correct (100.0000), but the four zeros following the number 100 makes the query not look very good. We need to define how many digits we to return in order to correct this discrepancy. To do this, we will have to use an often misunderstood computer science concept called a **CAST**.

Think of a **CAST** function as if you were a wizard **casting** a spell on something else. Don't like that fireplace where it is? **CAST Fire-Sofado... and Poof!** Now it's a sweet Ottoman Sofa with a massage command and extra large cup holders. Think you have too many veggies and not enough nachos? **CAST Veggis-Reducto... and Poof!** Now you have a whole shelf lined with new bags of Doritos.

Although the **CAST** function in a computer isn't nearly as cool as it would be outside of a computer, the concept is still the same. A **CAST** simply turns one type of data into another type of data. So as a computer wizard, you should be completely at ease doing even the most complicated of computer sorcery. Let's start with the fireplace-like problem we have in front of us and magically turn the following result into a sweet Ottoman sofa result.
 
     SELECT AVG(quantity) FROM veggies;

All we will need to do is CAST the result of the average function as an integer to prevent the zeros from appearing in the first place. Here is what it should look like.

     SELECT CAST(AVG(quantity) as Decimal(10,0)) FROM veggies;

*Remember with the Decimal datatype that the first number refers to the amount of digits in the number while the second number refers to the number of decimal places represented. Since we do not want any of the decimal places represented, we put a zero as the second number.*

The 'as' statement represented in the past few examples can also be used outside of the **CAST** function, usually to redefine the names of tables that are returned. An example of the 'as' function used like this would be something like:

     SELECT name as Foods FROM fruits;

The result will be all of rows in the column 'name' from table fruits, but the resulting table will be labeled 'Foods'.

### Addition, Subtraction, Multiplication, Division, and Modulus

The last thing that I want to go over before the grand finale of this tutorial is the mathematical functions that can be used when attempting to return more relevant results in MySQL. For example, say that we want to return the amount of veggies that we have sold in our stores. We can easily return the relevant results with a quick math equation like so:

     SELECT name, (PURCHASED_QUANTITY - QUANTITY) as Amount_Sold FROM veggies;

We can see from the results that investing in pumpkins would have been a wise decision.

Now, let's see how much money we have made for each veggie so far. The concept is almost the same as the last query, but we have to add the price column to the equation.

     SELECT name, (PRICE * (PURCHASED_QUANTITY - QUANTITY)) as Profits FROM veggies;

Now if we sold a constant amount of veggies we had just purchased from when they are fresh until they expire, how many veggies would we need to sell an hour in order to sell them all?

    SELECT name, (PURCHASED_QUANTITY / SHELF_LIFE) as VegsPerHr FROM veggies;

I'm sure that you can figure out how to use modulus and addition in the same ways.

*Remember, modulus is the remainder after you divide one thing by another and defined by the character '%'. For example, 5 % 2 = 1, because there is a remainder of 1. 13 % 9 = 4, because there is a remainder of 4.*

## MySQL/Databases - UNIONS and JOINS pt. 2

### UNIONS

**UNIONS** are used with normal **SELECT** statements to combine queries when there is nothing to compare the tables to. Think of them as **JOINS** with no **WHERE** or **HAVING** clauses. For example, say that I wanted to see all the textures of both the fruits and veggies tables. Since there is nothing to compare the two tables to in order to make a **JOIN**, I would simply have to find all of the textures of the fruits table and **UNION**, or combine, them with all of the textures from the veggies table. The query would go something like this:

     SELECT texture FROM fruits UNION SELECT texture FROM veggies;

The best thing about the UNION statement is that the results are all unique. Notice how they do not repeat as a normal **SELECT** statement would. To print out the results in alphabetical order, simply add an **ORDER BY** clause at the end of the statement above.

      SELECT texture FROM fruits UNION SELECT texture FROM veggies ORDER BY texture asc;

**UNION** statements can only work if the following four conditions are met by all of the tables involved.

1) The **SELECT** statement returns the same number of columns for each table

2) Each resulting column from the **SELECT** statement has the same name. These can easily be changed with an 'as' statement

3) The resulting columns are in the same order

4) Each resulting column has the same datatype as every other resulting column in order. This can easily be changed with a **CAST** function

Basically you cannot create a **UNION** of two things that do not fit together.

### JOINS pt. 2

Remember, **JOINS** are only applicable if there is something to compare the two tables to each other. If there is nothing to compare, you simply need to use a **UNION** statement, or, more drastically, create a brand new table with which to house your results. Let's look at a few more examples of JOINS before we move onto our final questions.

**JOINS** do not have to just be used for **SELECT** statements, they can be used for **UPDATE** and **ALTER** statements as well. Here is an example of how it would be used with an **UPDATE** statement. 

    UPDATE fruits,veggies SET fruits.last_purchased = (now()) , veggies.last_purchased = (now());

This command tells MySQL update all of the last_purchased columns in both tables so that the value in the column last_purchased equals the current date.

**JOIN** statements can also be used in conjunction with the functions learned in previous chapters. Just remember that you have to write the table name and column name separated by a period whenever you are dealing with more than one table. Here is an example of a **JOIN** with functions.

    SELECT greatest(max(fruits.price),max(veggies.price)) as HighestPrice FROM fruits,veggies;

This statement returns the fruit or veggie with the highest price. Notice that we did not have to use the **WHERE** clause in this case since we already have the greatest function to tie both tables together. Think about how you would return the name of the priciest fruit with this kind of statement. It will come in handy for the final questions in this tutorial.

*Hint: It's not as easy as you think*

An alternative for this kind of notation for a **JOIN** is called an embedded **SELECT** statement **JOIN**. These can be useful as they help the programmer connect tables in a way that is much easier to follow. 

*For a better understanding of this alternative method, simply type "embedded select statements" into Google and look at some examples. Remember that there is no one right way to do anything in Computer Science. You are only limited by your imagination.*

### INNER vs OUTER JOINS

The terms **INNER JOINS** and **OUTER JOINS** have all but faded away into the annals of history, but pretentious computer scientists love to ask what the difference is between them. I have been in many a job interview where this question has come up. Let me see if I can explain this concept as succinctly and thoroughly as possible.

As explained before, the **JOIN** concept joins two or more tables together. **INNER JOINS** and **OUTER JOINS** are used to explain exactly what the **JOIN** captures when two tables are returned. Imagine it like a Venn diagram encompassing both tables. The **INNER JOIN** is used to describe the middle part of the diagram where both tables intersect, while the **OUTER JOIN** is used to describe all or some parts of the Venn diagram, **INCLUDING** the middle part of the Venn diagram. Imagine two tables with a set of numbers:

A | B 
:-----------|:------------
1 | 4
2 | 5
3 | 6
4 | 7
5 | 8

An **INNER JOIN** would look like:

A | B 
:-----------|:------------
4 | 4
5 | 5

*Remember, an **INNER JOIN** only returns values are common in **BOTH** tables

A full **OUTER JOIN** would look like:

A | B 
:-----------|:------------
1 | null
2 | null
3 | null
4 | 4
5 | 5
null | 6
null | 7
null | 8

*A full **OUTER JOIN** returns all of the values*

### LEFT and RIGHT JOINS

The only reason that **JOINS** may still be used is due to the slightly useful application of the **LEFT** and **RIGHT JOINS**. These types of **JOINS** are technically a partial type of **OUTER JOIN** as they combine values that are not in necessarily in common with both tables. 

As you could have probably guessed, the **LEFT JOIN** command, in respect to a Venn diagram, **JOINS** the left part of the circle with the part that both circles intersect. The **RIGHT JOIN** command **JOINS** the part where both circles connect to the right circle. Some examples of this being used in everyday life would be to print out to the profits for all of the days of the year even if there was no profit for a particular day (and therefore, no entry in the database). 

In the scope of our grocery store, we could reasonably make a query that would return all of the fruits that have the first letter as a particular letter in the alphabet table. First we need to make a table with all of the letters in the alphabet. 

     CREATE TABLE LETTERS (id int primary key auto_increment, letter varchar(1));
     INSERT INTO LETTERS (letter) VALUES ('A'),('B'),('C'),('D'),('E'),('F'),('G'),
     ('H'),('I'),('J'),('K'),('L'),('M'),('N'),('O'),('P'),('Q'),('R'),('S'),('T'),('U'),('V'),('W'),('X'),('Y'),('Z');

Now we can use the new commands that we have just learned. Here is a quick example with the **LEFT JOIN** command. 

     Select letters.letter as letter, veggies.name as foods from letters left join veggies
      on mid(veggies.name,1,1) = letters.letter;

Here is an example of how to do the same thing with the fruits and the **RIGHT JOIN** command.

     Select letters.letter as letter, fruits.name as foods from fruits right join letters
      on mid(fruits.name,1,1) = letters.letter;

*The only difference between the **LEFT JOIN** and **RIGHT JOIN** is the order by which the tables are referenced to determine which table is fully evaluated and which is partially evaluated. Also, remember that you must use the keyword **ON** instead of **HAVING** or **WHERE** in order for these queries to work.*

Here is an example of both tables being listed alphabetically.

     Select letters.letter as letter, veggies.name as foods from letters left join veggies
     on mid(veggies.name,1,1) = letters.letter union Select letters.letter as letter,
     fruits.name as foods from fruits right join letters on mid(fruits.name,1,1) = 
     letters.letter order by letter asc

Now you know how to use **LEFT** and **RIGHT JOINS**. I will not ask you any questions over them, as I find them to be pretty stupid commands. Since you are going to be using embedded SQL anyways, I see no point in adding them to the list of things you need to know.

### The Final Questions

Now is the moment of truth. In order to determine if you have learned anything from this tutorial, I have provided you with six more problems with which you will have to employ every technique you have learned in this tutorial so far. If you are unsure of a question, don't just look at the bottom of the page. Go back a search for helpful hints in the tutorial in order to figure it out. Using your brain will help you out immensely in the future. Trust me.

### Questions
 
All of these problems can be solved in a single SQL statement

*10) Return the most profitable fruit that has the same color as lettuce or tomatoes*

*11) Return all of the foods with a moist taste*

*12) There is new a food tax of 7%. Update all of the food prices*

*13) Return the average current quantities of all fruits and veggies*

*14) Return the range of food prices for fruits and veggies*

*15) Return all of the foods with their prices in alphabetical order*

*16) Return the name and profit of the most profitable fruit or vegetable*

**Hint: See the mathematics section to see how this is done on just one table. This is the hardest question I am willing to ask. If you can figure it out without cheating, you will truly be an SQL wizard.**

If you have completed all of these questions, you are ready to program with MySQL in you PHP framework. When you run an SQL command in a PHP framework, the result comes out as something called a **CURSOR**, or a temporary table with which to keep all of your data. Since most frameworks are different, it would be difficult to give any advice until you picked one. Please view the PHP framework section in order to get started. 

Thank you for taking the time to read this tutorial, and validating the last two weeks of my life. For comments and/or suggestions, please send an email to: [mauvemoonman@gmail.com](mailto:mauvemoonman@gmail.com)

## MySQL/Databases - Things I Did	 Not Talk About, But You Should Probably Know

Below you will find some of the things I have chosen not to talk about in this tutorial and the reason for doing so. 

### Permissions and Views

Used by database administrators to control who can view and has access to certain portions of the database. Chose not to include, because it is not necessary in smaller websites where there are relatively few people with database access. 

### Triggers

Something has to make someone pull the trigger of a gun, just like something has to make an SQL trigger statement fire. Triggers are statements that only fire when a certain condition has been met, such as the date being the person's birthday, or one's bank account being overdrawn. They are not included in this tutorial, because they require a bit more of an advanced grasp of computer programming than I am willing to give in this tutorial.

### UDFS (User Defined FunctionS)

Like the static functions defined earlier in this tutorial, but made by the user in SQL. Again, they require a bit more programming experience to understand.

### Stored Procedures

Almost exactly like UDFS, except these functions are made in another language, and moved into SQL. They require a lot more programming experience to understand.

## MySQL/Databases - Question Answers

1. SELECT color, sum(quantity) FROM fruits GROUP BY color;**

2. SELECT name FROM fruits ORDER BY name asc;**

3. SELECT max(purchased_quantity),min(purchased_quantity) FROM fruits;**

4. SELECT color,avg(length(name)) FROM fruits GROUP BY color;**

5. SELECT name FROM fruits WHERE color = 'Yellow' GROUP BY name HAVING mid(name,1,1) = 'P';**

6. SELECT name FROM fruits WHERE ((texture = 'spongy') AND (price > 0.30)) OR ((texture = 'juicy') AND (price < 0.20));**

7. ALTER TABLE fruits ADD user varchar(100);**

8. UPDATE fruits SET user = 'Toby';**

9. ALTER TABLE fruits DROP user;**

10. SELECT fruits.name, max(fruits.price*(fruits. purchased_quantity-fruits.quantity)) as ProfitsFruit FROM fruits,veggies WHERE fruits.color = veggies.color AND (veggies.name = 'lettuce' OR veggies.name = 'tomatoes');**

11. SELECT name FROM fruits WHERE mid(taste,7,5) = 'Moist' Union SELECT name FROM veggies WHERE mid(taste,7,5) = 'Moist';**

12. UPDATE fruits,veggies SET fruits.price = (1.07 * fruits.price) , veggies.price = (1.07 * veggies.price);**

13. SELECT avg(fruits.quantity) as AvgFruit, avg(veggies.quantity) as AvgVeg FROM fruits,veggies;**

14. SELECT (max(fruits.price)-min(fruits.price)) AS RangeFruit, (max(veggies.price)-min(veggies.price)) AS RangeVeg FROM fruits, veggies;**

15. SELECT name,price from fruits Union SELECT name,price from veggies ORDER BY name asc;**

16. SELECT name, max(PRICE * (purchased_quantity -QUANTITY )) AS Profits FROM veggies Union SELECT name, max(PRICE * (purchased_quantity -QUANTITY )) AS Profits FROM fruits ORDER BY Profits desc limit 1**
