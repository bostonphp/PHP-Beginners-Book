#MySQL/Databases Chapter 1 - Why MySQL?:#

This chapter is written assuming that you, the user, has successfully installed the WAMP, XAMP, or MAMP packages. If you have not, please refer to the previous chapters entitled WAMP, XAMP, and MAMP configuration so that you can successfully test and implement the commands outlined in this tutorial. We will begin this chapter assuming that the reader has absolutely no knowledge of MySQL or databases.

##What are databases?##

Have you ever collected anything? Rocks? Baseball cards? Sports cars? Where would one normally put these things? One person might put the sports cars in a garage, the rocks in a box in the basement, and the baseball cards in plastic sleeves on a shelf in the living room. It would not make much sense to put them all in one place, as it would be hard to find any particular item. What if all of your sports cars, rocks, and baseball cards were on the shelf in your living room? In addition to being very inconvenient to remove any one item from your living room, it would be confusing what and how many items you had to begin with. The same applies to electronic data.

"Databases" are simply an organized collection of data, usually in electronic form. They are composed of smaller parts called "tables". These tables are composed of even smaller parts called "rows" and "columns" similar to what one would see in a Excel spreadsheet (or any spreadsheet for that matter). The columns section of each table declares the characteristics of each table while each row contains unique data for each element in the table. It sounds complicated but it is actually quite simple. Take the example outlined below:

###Table Rocks###

 ID | Name | Location | Origin | Composition | Color 
:-----------|:------------|:------------ | :------ | :------ | :------
 01 | Obsidian | Basement | Mexico | Volcanic Glass | Black 


We can clearly see that the elements in this table have the six column properties defined as ID, Name, Location, Origin, Composition, and Color. The table has one row that characterizes a rock named "Obsidian" whose location is currently in the "Basement". It also claims that this rock is "Black" and composed of "Volcanic Glass". Other rocks can be added to this table making it easy to create a distinction and easy reference between our obsidian rock and other rocks in our collection such as diamonds, sandstones, and gold. Let's add these new elements to our previous table just to see what it looks like.

 ID | Name | Location | Origin | Composition | Color 
:-----------|:------------|:------------ | :------ | :------ | :------
 01 | Obsidian | Basement | Mexico | Volcanic Glass | Black 
 02 | Diamond | Basement | Congo | Native Minerals | None 
 03 | Sandstone | Backyard | Mexico | Feldspar | Brown 
 04 | Gold | Basement | New Mexico | Gold | Gold 

See. There's nothing to worry about. 

Here is a quick review of what we have learned.

1. Columns of a table hold different characteristics of elements in that table
2. Rows in a table hold different elements uniquely defined by the table's columns
3. Tables are just a collection of things that you want to keep track of.  
4. Databases are a collection of tables.

#MySQL/Databases Chapter 2 - Where do I start?:#

Alright. You've made it through the first chapter. Are you proud of yourself? I sure am! Give yourself a pat on the back. This next chapter will be a tad more difficult as it requires the user to do other things as well as read this helpful instruction manual. 

###Navigating to your WAMP program###

Please follow the steps outlined below:

1. There should be a shortcut on the desktop of your computer. It should look like a big pink "W" surrounded by a box. Double click on it. 
2. If it is not there, open up your start menu and search for WAMP. Find the icon described above, and click on it in the fashion that your prefer. Most popular people prefer the double click. Feel free to click in your own special way if you don't feel like conforming to their norms.
3. If you can remember were you put it, please disregard steps 1 and 2

Nice, I knew you could do it. Now it's time to...

###Open your localhost!!!###

Please follow the steps outlined below:

1. Click and open your favorite browser. It should not be Internet Explorer.
2. Type or paste the word **localhost** into where you would normally type a website address, and press enter.

###Congratulations! You did it!###

At this point you should see a page that says **XAMPP for Windows** in the top left corner, with a list of commands down the left side. Click on the word **phpMyAdmin** on the navigation bar on the left hand side of the screen. 

*Was there an error? Don't panic. Just type in **https://localhost**. You should now be able to click on **phpMyAdmin** without any more hassles. If there is still a problem, you may have to uninstall and reinstall WAMP*

##Using phpMyAdmin##

Alright. By now you should be on a tacky dark blue and grey screen with **phpMyAdmin** on the upper left side. At the top of the screen, you should see a bunch of tabs directly underneath the word **localhost**. Click on the **SQL** tab.

*NOTE: Because this tutorial focuses mainly on programming with embedded SQL in PHP, we will not be using any of the fun, efficient, and easy to use syntax phpMyAdmin offers. This is mainly because you will not actually be using this framework for the selects, inserts, updates, and deletes implemented in your awesome webpage. You will use these commands directly in the php framework of your choice.*

You should see a rectangular text area in front of you with a button labeled **go** in the bottom right corner of the box. Type the command **CREATE DATABASE grocery_store;** into the box and press go. If you typed in the command right, you will have created the database **grocery_store** in your MySQL database. Good work.

As a review, let us go over the basic structure of the MySQL database with colorful metaphors.

If the MySQL Database was a state...

* A database in the MySQL Database would be a house in that state
* A table in the database would be a room in that house
* A row in the table would be an object belonging in that room

If the MySQL Database was a chain of stores...

* A database in the MySQL Database would be a single store in that chain
* A table in the database would be a type of product sold at that store (such as a fruit)
* A row in the table would be a specific product sold (such as an apple)

Try to think of it as a huge box holding lots of things organized into smaller and smaller boxes within it.

You have just created the database of a single fictional store grocery store, which we will develop more in the next chapter.

#MySQL/Databases Chapter 3 - The INSERT and DELETE statements:#

