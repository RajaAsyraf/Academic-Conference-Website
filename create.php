<html>
 <head>
  <title>Create</title>
 </head>
 <body>
 <?php 

$link=mysql_connect("localhost","root","");
if(!$link)
	die("Could not connect to server.<br>".mysql_error());
else
	echo "Successfully connected to server.<br>";
 
 $sql="CREATE DATABASE webapp";
if(mysql_query($sql))
	echo "Successfully created db.<br>";
 else
	 die ("Could not create db.<br>".mysql_error());

 $db_selected=mysql_select_db("webapp");
 
 $sql="CREATE TABLE registration(
	GuestID INT(4) AUTO_INCREMENT,
	FirstName VARCHAR(30),
	LastName VARCHAR(30),
	IdentityCard VARCHAR(30),
	TelephoneNum VARCHAR(30),
	Email VARCHAR(320),
	University VARCHAR(100),
	Department VARCHAR(100),
	PRIMARY KEY(GuestID))";
 mysql_query($sql);

 mysql_close($link);
 ?> 
 </body>
</html>