<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 

$link=mysql_connect("localhost","root","");
if(!$link)
	die("Could not connect to server.<br>".mysql_error());
else
	echo "Successfully connected to server.<br>";

 $db_selected=mysql_select_db("webapp");
 $sql = "INSERT INTO registration (FirstName, LastName, IdentityCard, TelephoneNum, Email, University, Department) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[identitycard]','$_POST[tel]','$_POST[email]','$_POST[uni]','$_POST[dept]')";

if (mysql_query($sql)) {
    echo "Data entered successfully.<br>";
} else {
    echo "Error entering data: " . mysql_error() . "\n";
}
 mysql_close($link);
 ?> 
 </body>
</html>
