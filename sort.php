<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
$link = mysql_connect("localhost", "root", "");
if (!$link) {
    die("Could not connect: " . mysql_error());
}

$db_selected = mysql_select_db("webapp");

$sql = "SELECT * FROM registration";
 mysql_query($sql);

if ($result = mysql_query("SELECT * FROM registration ORDER BY University, FirstName ")) {
     echo "<table><tr><th>ID</th><th>Name</th><th>Identity Card</th><th>Telephone Number</th><th>Email</th><th>University</th><th>Department</th></tr>";
     while($row = mysql_fetch_array($result)) {
         echo "<tr><td>". $row['GuestID'] . "</td><td>" . $row['FirstName'] . " ". $row['LastName'] . "</td><td>" . 
		 $row['IdentityCard']. "</td><td>" . $row['TelephoneNum'] . "</td><td>" . $row['Email'] .
		 "</td><td>" . $row['University'] . "</td><td>" . $row['Department'] ."</td></tr>";
		 echo "<br />";
     }
     echo "</table>";
} else {
     echo "0 results";
}
mysql_close($link)
?>  

</body>
</html>