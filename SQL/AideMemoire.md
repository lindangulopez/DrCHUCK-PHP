The primary value add of relational databases over flat files, is their ability to scan large amounts of data quickly.
It is not a good idea to use a persons email address as their primary key.

If our user interface (i.e. like iTunes) has repeated strings on one column of the UI, we model this properly in a database with a table that maps the strings in the column to numbers and then use those numbers in the column.

A Logical key is the label we give a column that the "outside world" uses to look up a particular row.

A Foreign key is the label we give to a column that is an integer and used to port to a row in a different table.


The MySQL keyword <<AUTO_INCREMENT>> is added to primary keys in a CREATE TABLE statement to indicate that the database is to provide a value for the column when records are inserted.


The SQL keyword <<JOIN>> reconnects rows with foreign keys with the corresponding data in the table that the foreign key points to?


If you JOIN two tables together without an ON clause, the number of rows you get is the number of rows in the first table times the number of rows in the second table.


An "ON DELETE CASCADE" clause implies that in a foreign key constraint in a MySQL CREATE TABLE statement if the row in the parent table is deleted all the rows in a child table that point to that row via a foreign key will be deleted.


Hash Index are faster for exact matches i.e, =. But can only handle simple equality comparisons cannot use to speed up ORDER BY operations.

If you are using IN in your query, you should use B-tree index.

When the data is relatively short and almost always present, prefer the CHAR column type over VARCHAR.

The <<NOW()>>  is the built-in MySQL function that gives you the current time in an SQL statement.
