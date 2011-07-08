#MySQL/Databases Chapter 1 - Why MySQL?:#

This chapter is written assuming that you, the user, has successfully installed the WAMP, XAMP, or MAMP packages. If you have not, please refer to the previous chapters entitled WAMP, XAMP, and MAMP configuration so that you can successfully test and implement the commands outlined in this tutorial. We will begin this chapter assuming that the reader has absolutely no knowledge of MySQL or databases.

##What are databases?##

Have you ever collected anything? Rocks? Baseball cards? Sports cars? Where would one normally put these things? One person might put the sports cars in a garage, the rocks in a box in the basement, and the baseball cards in plastic sleeves on a shelf in the living. It would not make much sense to put them all in one place, as it would be hard to find any particular item. What if all of your sports cars, rocks, and baseball cards were on the shelf in your living room? In addition to being very inconvenient to remove any one item from your living room, it would be confusing what and how many items you had to begin with. The same applies to electronic data.

"Databases" are simply an organized collection of data, usually in electronic form. They are composed of smaller parts called "tables". These tables are composed of even smaller parts called "rows" and "columns" similar to what one would see in a Excel spreadsheet (or any spreadsheet for that matter). The columns section of each table declares the characteristics of each table while each row contains unique data for each element in the table. It sounds complicated but it is actually quite simple. Take the example outlined below:

###Table Rocks###

| ID | Name | Location | Origin | Composition | Color |
|:-----------|:------------|:------------|
| 01 | Obsidian | Basement | Mexico | Volcanic Glass | Black |

First Header  | Second Header
------------- | -------------
Content Cell  | Content Cell


We can clearly see that the elements in this table have the six column properties defined as ID, Name, Location, Origin, Composition, and Color. The table has one row that characterizes a rock named "Obsidian" whose location is currently in the "Basement". It also claims that this rock is "Black" and composed of "Volcanic Glass". Other rocks can be added to this table making it easy to create a distinction and easy reference between our obsidian rock and other rocks in our collection such as diamonds, sandstones, and gold. 