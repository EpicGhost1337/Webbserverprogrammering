<form method="post" action="kys.php">

<select name="limit">
<option value="10"> 10 </option>
<option value="20"> 10 </option>
<option value="30"> 10 </option>
<option value="40"> 10 </option>
<option value="50"> 10 </option>
</select>

<input type="submit"/>

</form>



<?php


$dbc = mysqli_connect("localhost","root","","lab2");
$limt = $_Post['limit'];
$offset = $_GET['offset']
$query = "SELECT*FROM Countries LIMIT 10 OFFSET 36;";

$result = mysqli_query($dbc,$query);

/*
for($i = 0 ; $i < 10 ; $i++){
	
	
	mysqli_fetch_array($result);

echo $row['Countryname'];
echo "<br>"
}
*/

while($row = mysqli_fetch_array($result)){
	
	echo $row['Countryname'];
	echo "<br>";
	
}



?>