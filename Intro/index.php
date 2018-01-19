<table>
<?php


$dbc = mysqli_connect("localhost","root","","lab2");


$query = "Select*from Cities;";

$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){
	echo "<tr>";
	
	echo "<td>"; 
	echo $row['City'];
	echo "</td>"; 
	
	echo "<td>";
	echo $row['Population'];
	echo "</td>";
	
	echo "</tr>"

	
	
}

?>
</table>





