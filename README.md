Documentation
===================
> **Basic Classes**

> - DBConnector --- To make queries
> - Modal --- To interact with database, not to write queries, <br>**Default functions**: <br> all() --- get all records as an objects array <br>get(array(key=>value)) --- gives an object by given filter<br>filter(array(key=>value)) --- gives objects array by given filters<br>save() --- will create an object, if it was taken from database it will update the record with the new data