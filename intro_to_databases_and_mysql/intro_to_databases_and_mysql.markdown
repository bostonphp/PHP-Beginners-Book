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

That should be enough to at least let us get started. Now we have to figure out what kind of data we are going to put in these categories. For learning purposes, there are really only three types of data you will need to use. They are:

* Numbers
* Characters
* Dates

Numbers, as the name probably gives away, are any kind of numeric information. Will you need to use any kind of decimals for the data that you are going to store? In that case you will need to use the datatype **float**. If not, you can use the datatype **int** or **bigint** (which takes up more space, but can handle bigger numbers).

Characters are any kind of way to representation of a letter, word, or series of words. For example the letter **A** and the phrase **Anything goes in SQL world** would both be of a character type. Use the datatype **varchar(n)** to define a column that you would like to represent with a character. Substitute the **n** in **varchar(n)** with the maximum amount of letters a column in your table can have (up to 255). Spaces, tabs, and newlines in a paragraph all count as a characters.

Dates are a way to store dates in the database. Do you just want to store the dates and not the time? Use the datatype **date**. Do you want to store the time and not the date? Use the datatype **time**. Want to store the date and the time? Use the datatype **datetime**.

Let's look back at our characteristics of fruits to decide what kind of datatype they should be.

* Fruit store ID - Consists of numbers without a decimal point. **int**
* Fruit name - Consists of a few letters. **varchar(50)**
* Fruit color - Consists of few letters. **varchar(50)**
* Fruit taste - Consists of more letters. **varchar(100)**
* Fruit texture - Consists of more letters. **varchar(100)**
* Fruit price - Consists of numbers with a decimal point. **float**
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
     PRICE float, QUANTITY int, SHELF_LIFE int, LAST_PUCHASED datetime, 
     PURCHASED_QUANTITY int);

Just press enter, and you should be all set. Congratulations! You have created your very first table.

## MySQL/Databases - INSERT and SELECT

Now it is time to actually put something into our table. Click on the SQL tab again, type the following command, and press enter.

     INSERT INTO FRUITS VALUES (001,"Banana","Yellow",
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

     INSERT INTO FRUITS VALUES (003,"Rasberries",
     "Red","Tart Moist","Juicy",".25",60,92,
     "2011-05-09 10:15:00",200);

Remember the syntax for inserting into a table is as follows:

*INSERT INTO {Name of table} VALUES ({Number of values defined when the table was created in the correct order});*

Don't worry if you mess up. MySQL will warn and prevent you from running incorrect commands.

### MySQL/Databases - SELECT Statements

The syntax of MySQL is pretty straight forward. We have seen so far to use INSERT statements to insert something into a table and CREATE statements to create a brand new table (or database). It doesn't take much imagination to figure out that the SELECT statement selects a value or group of values from a table and return that value(s) to the user. 

Let's start out with a simple SELECT statement. In phpMyAdmin click on the **grocery_store** icon on the left side and then click on the **SQL** tab at the top of the page. Type in the following command and press **Go**.

     SELECT * FROM fruits;

If you typed out this statement correctly, you should see the entire contents of your table **fruits**. To select only certain columns of a table, type out all of the columns you want to see in that table separated by a comma. Type in the following command and press **Go**.

     SELECT name,price,quantity FROM fruits;

This kind of syntax becomes especially useful when dealing with the conditional **WHERE** statement described in the next chapter.

## MySQL/Databases - WHERE and ORDER BY

So far you have learned how to get blocks of information from a table, but you still have no idea how to turn those results into something relevant such as selecting all of the fruit prices greater than 20 cents, or displaying all of the "Red" fruits. This is where the **WHERE** statement comes into play. The **WHERE** statement gives a specific set of criteria to the MySQL database so that the results are much more controlled and relevant to what you want. For example, say that you want to select the names of all of the fruits with a **Red** color. You would want to type in the following statement in the compiler.

     SELECT name FROM fruits WHERE color = 'Red';

The results should be every fruit labeled **Red** in the database. 

*Remember to surround a string with quotations or parentheses every time you wish to use them in SQL statements. They will not work otherwise.*

Now say that we want to do something a bit more complicated and select a fruit whose price is greater than 20 cents. For this, you need to think back to geometry and remember your inequality modifiers. Don't remember what they are? Don't worry, I have provided a helpful table below.

 Operation | Symbol 
:-----------|:------------
 Equal To | = 
 Greater Than | > 
 Less Than | <
 Greater Than Or Equal To | >= 
 Less Than Or Equal To | <= 

To find all of the fruits with a price that is greater than 20 cents, it is fairly obvious that we need to use the Greater Than operator defined above. Type the following command into your compiler and press **Go**.

    SELECT name FROM fruits WHERE price > 0.20;

## MySQL/Databases - STATIC FUNCTIONS and GROUP BY
## MySQL/Databases - JOINS