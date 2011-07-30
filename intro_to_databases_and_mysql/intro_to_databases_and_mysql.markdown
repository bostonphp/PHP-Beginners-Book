## MySQL/Databases - Why MySQL?
This chapter is written assuming that you, the user, has successfully installed the WAMP, XAMP, or MAMP packages. If you have not, please refer to the previous chapters entitled WAMP, XAMP, and MAMP configuration so that you can successfully test and implement the commands outlined in this tutorial. We will begin this chapter assuming that the reader has absolutely no knowledge of MySQL or databases.

### What are databases?
Have you ever collected anything? Rocks? Baseball cards? Sports cars? Where would one normally put these things? One person might put the sports cars in a garage, the rocks in a box in the basement, and the baseball cards in plastic sleeves on a shelf in the living room. It would not make much sense to put them all in one place, as it would be hard to find any particular item. What if all of your sports cars, rocks, and baseball cards were on the shelf in your living room? In addition to being very inconvenient to remove any one item from your living room, it would be confusing what and how many items you had to begin with. The same applies to electronic data.

"Databases" are simply an organized collection of data, usually in electronic form. They are composed of smaller parts called "tables". These tables are composed of even smaller parts called "rows" and "columns" similar to what one would see in a Excel spreadsheet (or any spreadsheet for that matter). The columns section of each table declares the characteristics of each table while each row contains unique data for each element in the table. It sounds complicated but it is actually quite simple. Take the example outlined below:

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

If the MySQL Database was a state...

* A database in the MySQL Database would be a house in that state
* A table in the database would be a room in that house
* A row in the table would be an object belonging in that room

If the MySQL Database was a chain of stores...

* A database in the MySQL Database would be a single store in that chain
* A table in the database would be a type of product sold at that store (such as a fruit)
* A row in the table would be a specific product sold (such as an apple)

Try to think of it as a huge box holding lots of things organized into smaller and smaller boxes within it.

Here is a quick review of what we have learned.

1. Columns of a table hold different characteristics of elements in that table
2. Rows in a table hold different elements uniquely defined by the table's columns
3. Tables are just a collection of things that you want to keep track of.  
4. Databases are a collection of tables.

## MySQL/Databases - Where do I start?
Alright. You've made it through the last chapter. Are you proud of yourself? I sure am! Give yourself a pat on the back. This next chapter will be a tad more difficult as it requires the user to do other things as well as read this helpful instruction manual. 

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
At this point you should see a page that says **XAMPP for Windows** in the top left corner, with a list of commands down the left side. Click on the word **phpMyAdmin** on the navigation bar on the left hand side of the screen. 

*Was there an error? Don't panic. Just type in **https://localhost**. You should now be able to click on **phpMyAdmin** without any more hassles. If there is still a problem, you may have to uninstall and reinstall WAMP*

### Using phpMyAdmin
Alright. By now you should be on a tacky dark blue and grey screen with **phpMyAdmin** on the upper left side. At the top of the screen, you should see a bunch of tabs directly underneath the word **localhost**. Click on the **SQL** tab.

*NOTE: Because this tutorial focuses mainly on programming with embedded SQL in PHP, we will not be using any of the fun, efficient, and easy to use syntax phpMyAdmin offers. This is mainly because you will not actually be using this framework for the selects, inserts, updates, and deletes implemented in your awesome webpage. You will use these commands directly in the php framework of your choice.*

You should see a rectangular text area in front of you with a button labeled **go** in the bottom right corner of the box. Type the command:

	CREATE DATABASE grocery_store; 

into the text area, and press **go**. If you typed in the command right, you will have created the database **grocery_store** in your MySQL database.

Go back to the **SQL** tab and type the command:

	USE grocery_store;

This tells the MySQL database that you are going to work in the database **grocery_store** until you say otherwise. You will work within this structure throughout the next few chapters of this book.

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

That about sums it up, now we just have to put these columns in the correct order. Since the **Fruit store ID** is the only truly unique element in the list, we will make this the "Primary Key".

*Defining a column with a primary key means that the column will only be able to have unique values (i.e. nothing can repeat itself). Some examples of this in everyday life are license plate numbers, credit card numbers, and social security numbers. All of these values work to make sure that somebody can't impersonate someone else, and allow them access to certain privileges that are not entitled to them. The same concept applies to tables in databases. Whenever possible, it is good practice to make sure that the table you are creating contains some form of primary key, to give something to uniquely identify a row. This will be discussed more in future sections*

### How do I make a table with this?
Good question. It may seem like I am rambling on a bit here, but I assure you that my writing has some purpose. In your window with phpMyAdmin click on the **SQL** tab to bring up the command box again. Make sure that you see **localhost -> grocery_store** above the box. If you do not, just click on the **grocery_store** link on the right side and then the **SQL** tab to get yourself there. 

Type the command:

	CREATE TABLE FRUITS(*);

into the command box, but do not press enter. You will receive and error. Replace the star in the parentheses the names and variable types that we have outlined above. 

     CREATE TABLE FRUITS(ID int PRIMARY KEY, NAME varchar(50), 
     COLOR varchar(50), TASTE varchar(100), TEXTURE varchar(100), 
     PRICE decimal(10,2), QUANTITY int, SHELF_LIFE int, LAST_PURCHASED datetime, 
     PURCHASED_QUANTITY int);

Just press enter, and you should be all set. Congratulations! You have created your very first table.

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
     "Red","Tart Moist","Juicy",".25",60,92,
     "2011-05-09 10:15:00",200);

Remember the syntax for inserting into a table is as follows:

*INSERT INTO {Name of table} VALUES ({Number of values defined when the table was created in the correct order});*

Don't worry if you mess up. MySQL will warn and prevent you from running incorrect commands.

### SELECT Statements

The syntax of MySQL is pretty straight forward. We have seen so far to use INSERT statements to insert something into a table and CREATE statements to create a brand new table (or database). It doesn't take much imagination to figure out that the SELECT statement selects a value or group of values from a table and return that value(s) to the user. 

Let's start out with a simple SELECT statement. In phpMyAdmin click on the **grocery_store** icon on the left side and then click on the **SQL** tab at the top of the page. Type in the following command and press **Go**.

     SELECT * FROM fruits;

*In general, the "*" in computer science refers to "all", so the result of the command above should return all columns of the table **fruits**.* 

If you typed out this statement correctly, you should see the entire contents of your table **fruits**. To select only certain columns of a table, type out all of the columns you want to see in that table separated by a comma. Type in the following command and press **Go**.

     SELECT name,price,quantity FROM fruits;

This kind of syntax (where the return columns are specified) becomes especially useful when dealing with the conditional **WHERE** statement described in the next chapter.

## MySQL/Databases - WHERE and ORDER BY

### WHERE Statements

So far you have learned how to get blocks of information from a table, but you still have no idea how to turn those results into something relevant such as selecting all of the fruit prices greater than 25 cents, or displaying all of the "Red" fruits. This is where the **WHERE** statement comes into play. The **WHERE** statement gives a specific set of criteria to the MySQL database so that the results are much more controlled and relevant to what you want. For example, say that you want to select the names of all of the fruits with a **Red** color. You would want to type in the following statement in the compiler.

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

The above statement should display the fruits in order of the column 'id' from smallest to largest. This is because the modifier **asc** is placed at the end of the command.

     SELECT name FROM fruits ORDER BY id desc;

The above statement will display the fruits in order of the column 'id' from largest to smallest. This is what happens when the **desc** modifier is used. 

The **ORDER BY** modifier can also be used with a **WHERE** statement like so:

     SELECT name FROM fruits WHERE price >= 0.25 ORDER BY id asc;

Just remember that the **WHERE** command ALWAYS goes before the **ORDER BY** command. If you mix them up, you will get an error. 

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

If you had looked, you would have realized that I did not that one has to use GROUP BY statements all of the time, but simply in most cases. This example is one of the exceptions. Since it is only returning one row, you don't actually need any GROUP BY statement to clarify how the rows will be divided.

     SELECT sum(quantity) FROM fruits;

You should have gotten 210. I'm not lying this time.

*3) You would like to know how many different types of fruits you own*

It would sure be awesome to have some kind of *counting* function so that we could simply *count* the number of **ids** in our table... I can't remember, do we have one of those functions we can use? Something to *count* things? If we did, we could always just run a statement like:

     SELECT count(id) FROM fruits;

and be done with it.

*4)You would like to return the first three letters of each fruits name, so that you can index them efficiently in store*

If you look at the table above, you will find the mid() function that returns a certain amount of characters from the data given to it. Unlike the other functions we have worked with, this function requires a bit more effort in order to run smoothly. The syntax requires that you enter the name of the variable, starting position, and length of the string into the function separated by commas. Since we want to grab the first three letters of the fruit name, I suggest that we arrange our function like so: **mid(name,1,3)**. I added the column **name** next to our function so that we can see the new results right next to the original results.

     SELECT name, mid(name,1,3) FROM fruits;

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

*Return the colors of the fruits with quantities greater than 100 including 100

Since you do not have to use any functions for this statement, you will need the **WHERE** statement

     SELECT color,quantity FROM fruits WHERE quantity >= 100;

*Return the colors of fruits whose combined quantities are greater than 100 including 100

I see the words 'combined quantities' in the question, which means that we are going to have to take the sum of the column quantities. As usual we are taking the sum of each fruit color. 

     SELECT color,sum(quantity) FROM fruits GROUP BY color HAVING sum(quantity) >= 100;

*Return the names and colors of fruits whose greatest name within that color is greater than or equal to 'Mango'

The result should return the fruit name closest to 'Z' for each color as long as it is below the word 'Mango', in which case it will not return anything.

     SELECT color,max(name) FROM fruits GROUP BY color HAVING max(name) >= 'Mango';

*Return the names and colors of fruits whose greatest name within that color is greater than or equal to 'Mango' and whose color is not Red

This is a derivation on the last problem. We just need to put a **WHERE** statement between the **FROM** and **GROUP BY** statements in order to make this work.

     SELECT color,max(name) FROM fruits WHERE color != 'Red' GROUP BY color HAVING max(name) >= 'Mango';

*Remember, the '!=' symbol means 'not equal to' in computer science language. For future reference, '!' symbol simply means 'not'.*

## MySQL/Databases - UPDATE and ALTER

### UPDATE

How are you doing so far? Tired from all of the sweet programming you have been doing lately? Thinking about taking a break? Well think again. I want to tell you about an awesome statement called **UPDATE**. I put this towards the end of the tutorial because it provides a break from the more complicated functions.

So what does the **UPDATE** command do exactly? Why, it updates a value or values in a table with new values. Besides the **SELECT** statement, you will use **UPDATE** far more often than any other kind of statement. The syntax is as follows:

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

Now we don't want to have the column that we created anymore. I seems like it contains a lot of unnecessary information a we would like to get rid of it. All we would have to do is run the following command. The database will give you a warning to make sure that you actually want to delete the column. Click OK.

     ALTER TABLE fruits DROP other_column;

You did it! The column is gone, and you didn't screw anything up (hopefully). Because the column was being deleted anyways, we did not have to define the datatype in the column before we dropped it.

## MySQL/Databases - AND/OR

The **AND** and **OR** modifiers are used **ONLY** in conjunction with the **HAVING** and **WHERE** statements discussed previously in this tutorial. To understand exactly what AND and OR statements do, we first need to dissect what exactly happens when we use **HAVING** and **WHERE** statements.

Here is an example of a **WHERE** statement:

    SELECT name FROM fruits WHERE color = 'Red';

This statement implies that the **SELECT** statement is looking to return the name of any row that has a color equal to ‘Red’. If the color is not equal to ‘Red’, the statement returns **false** and nothing is returned. If the color is equal to ‘Red’, the statement returns **true**. 

The AND and OR statements work along these principles. They join together two or more conditions, such as color = ‘Red’, to make a bigger condition. For the AND statement to return **true** all of the conditions in the statement must individually return **true**. For the OR statement to return **true** only one of the conditions in the statement must return **true**. An example of this is below.

Try out the two statements below individually. Which one do you think will give you the most results?

     SELECT name FROM fruits WHERE (color = ‘Red’) AND (texture = ‘Juicy’);

     SELECT name FROM fruits WHERE (color = ‘Red’) OR (texture = ‘Juicy’);

*Although they aren’t necessarily needed, I find that it is easier to enclose my different conditionals in parenthesis to avoid any unnecessary confusion.*

If you haven’t figured it out yet, the **OR** statement will yield the most results. This is because **OR** returns the red fruits, the juicy fruits, and the juicy red fruits. The **AND** statement will only return the juicy red fruits.

Let’s first try out a few examples, before I will give you some practice problems to see what you have learned in the past few sections.

*1) Return the names of the fruits that have a spongy texture and a price above $0.30*

This problem is almost exactly like the examples that we had before, but working with different columns. We can see that we will need to use the **AND** statement with the texture and price columns. The rest is fairly straight forward.

     SELECT name FROM fruits WHERE (texture = ‘Spongy’) AND (price > 0.30);

The result should be ‘Mangos’

*2) Return the type of textured fruit with an average price greater than $0.32 or a combined quantity less than 60*

This problem is a bit more difficult than the last one, mainly because we will have to use the more difficult **HAVING** statement in order to execute our queries. We can see that we will need the **OR** statement as well as the price and quantity columns for this problem. The **SELECT** statement also needs to be grouped by the texture column, since that is what we are comparing. 

*Remember that you will **GROUP BY** the column in the **SELECT** statement that is not part of any functions. In this case, it will be the texture column.*

     SELECT texture, avg(price),sum(quantity) FROM fruits GROUP BY texture HAVING (avg(price) > 0.32) OR (sum(quantity) < 60);

The result should return the fibrous fruits. 

### Questions

*Don't cheat. If you actually want to learn this, you are only hurting yourself.*

*5) Return the names of all of the yellow fruits whose names begin with a ‘P’.*

*6) Return the names of all of the fruits that have a price over $0.30 and a spongy texture, or a price under $0.20 and a juicy texture.*

*7) Make a new column named users of type varchar(100) in the fruits table.*

*8) Make every single value in the user column the value ‘Toby’;*

*9) Delete the column user in the fruits table.*

## MySQL/Databases – CONSTRAINTS and JOINS

### JOINS INTRO

So far we have just worked with one table in our queries in order to get the information that we need, but what if we have two or more tables? Do we have to query each of the tables individually? The answer is no, not usually, but you do need to think about a few things. 

The first is, what do the two tables have in common? Do they have the same user names we can query? Are they both arranged by colors, dates, or prices? In order to join two tables you, *cough*, usually need to find some sort of commonality between them.

*Commonality means “something in common”.*

The second is, if they don’t have anything in common, what do you need to do to give them something in common? Do you remember the example from the very start of the tutorial when we were referencing cars, rocks, and baseball cards? What do you think these three things would have in common? I can think of a few off the top of my head including: a color, a size, a weight, a height, a name, a value, a terminal velocity, etc. Without these columns in each of the tables, we would be unable to answer any of the silly questions that come into our heads.

Which is more expensive? A brand new Porsche, or my ten most valuable baseball cards? 

If I stacked all of my baseball cards in a line, how many rocks would I have to stack to go an equal distance?

Which rocks will match my new Ford pickup’s color?

 ### Creating Our New Table with Constraints

In order to join two tables, we will need to add a second table to our grocery store database. Copy the code below into the SQL tab, and press go.

CREATE TABLE VEGGIES(ID int PRIMARY KEY NOT NULL AUTO_INCREMENT, NAME varchar(50) NOT NULL, COLOR varchar(50), TASTE varchar(100), TEXTURE varchar(100), 
PRICE decimal(10,2), QUANTITY int DEFAULT 0, SHELF_LIFE int, LAST_PURCHASED datetime, PURCHASED_QUANTITY int, CHECK (PRICE > 0));

Look closely at the table we have just created. Do you notice anything different compared to the fruits table we created earlier? If you didn’t, you should look again. What we added to our table would be called **CONSTRAINTS**.

**CONSTRAINTS** are simply commands that one adds to their table to make sure that people don’t screw up them up further down the line. Sometimes **CONSTRAINTS** can even make our lives easier. Take, for example, the AUTO_INCREMENT **CONSTRAINT** we added to our table. This tells the MySQL compiler to add one to this column each time a new row is created. This means that we no longer have to insert those pesky numbers ourselves each time we want to create a new row!

*For those that don’t know too much about computing, a compiler is a way for the computer to translate what you are saying into computer code. Kind of like what a translator does when you go to a country where you don’t understand the language.*

 Here are a list of the most common **CONSTRAINTS**, and what they do. 

*Remember, all **CONSTRAINTS** should be inserted after the column name and datatype like in the example above. Not doing so will return an error. The only exception to this rule it the **CHECK CONSTRAINT** which is always inserted at the end in MySQL tables.*

CONSTRAINT | Function 
:-----------|:------------
NOT NULL | Prevents any NULL value from being placed in the column
PRIMARY KEY | Makes sure that every value is unique in the column. Each table needs to have one of these. You can still create a table without a PRIMARY KEY, but it is bad form. There can only be one column defined by a PRIMARY KEY.
UNIQUE | Makes sure that every value is unique in the column. Unlike the PRIMARY KEY, there can be more than one column defined as ‘UNIQUE’ in a table
DEFAULT | Used to define a value if one has not been inserted into the database. We used it above to insert 0 as a default value if nothing is put into the column ‘price’.
AUTO_INCREMENT | Used to automatically add a number to the last rows value when a new row is created. The default value for AUTO_INCREMENT is 1, but can be changed by the command AUTO_INCREMENT = n, where n is the number by which you would like to increment by. For example, if the last row had the value 6, and my AUTO_INCREMENT is set to 2, my next row would be 8.
CHECK | Used to make sure of a condition before a new row can be added. We implemented it in our new table to make sure that fruits weren’t being given away for free before they were inserted into the table.



## MySQL/Databases – JOINS pt. 2

## MySQL/Databases – CAST, and ‘as’

*another table needs to be made in joins with price as a float instead of a decimal*

SELECT color,avg(price) FROM fruits GROUP BY color;

Run the command above. See anything interesting with the results? The averages aren't exactly what they should be. **.2/1 = .2, not .200000002980232**. So what gives? Is there something wrong with the database?

Good question. The answer is both yes and no. Float is an approximate datatype, so the float values .20 and .200...029 are technically the same. We need to define how many digits we want the return values to display in order to correct this discrepancy. To do this, we have to use an often misunderstood computer science concept called a **CAST**.

Think of a **CAST** function as if you were a wizard **casting** a spell on something else. Don't like that fireplace where it is? **CAST Fire-Sofado... and Poof!** Now it's a sweet Ottoman Sofa with a massage command and extra large cup holders. Think you have too many veggies and not enough nachos? **CAST Veggis-Reducto... and Poof!** Now you have a whole shelf lined with new bags of Doritos.

Although the **CAST** function in a computer isn't nearly as cool as it would be outside of a computer, the concept is still the same. A **CAST** simply turns one type of data into another type of data. So as a computer wizard, you should be completely at ease doing even the most complicated of computer sorcery. Let's start with the problem we have in front of us.

## MySQL/Databases - Question Answers

**1) SELECT color, sum(quantity) FROM fruits GROUP BY color;**

**2) SELECT name FROM fruits ORDER BY name asc;**

**3) SELECT max(purchased_quantity),min(purchased_quantity) FROM fruits;**

**4) SELECT color,avg(length(name)) FROM fruits GROUP BY color;**

**5) SELECT name FROM fruits WHERE color = ‘Yellow’ GROUP BY name HAVING mid(name,1,1) = ‘P’;**

**6) SELECT name FROM fruits WHERE ((texture = ‘spongy’) AND (price > 0.30)) OR ((texture = ‘juicy’) AND (price < 0.20));**

**7) ALTER TABLE fruits ADD user varchar(100);**

**8) UPDATE fruits SET user = ‘Toby’;**

**9) ALTER TABLE fruits DROP user;**
