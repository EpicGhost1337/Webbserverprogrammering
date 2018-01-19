
<form method="GET" action="google.php">


<select name="limit" >
<option value="10">10</option>
<option value="20">20</option>
<option value="25">25</option>
</select>

<input type="submit" />

</form>
<?php

session_start();

echo $_SESSION['loginName'];

echo "<br>";


if(isset($_GET['offset'])){
	$offset = $_GET['offset'];
}
else{
	$offset = 0;
}

if(isset($_GET['limit'])){
	$limit = $_GET['limit'];
}
else{
	$limit = 10;
}

$dbc = mysqli_connect("localhost","root","","lab2");

$query = "SELECT * FROM cities ORDER BY City LIMIT $limit OFFSET $offset ;";

$result = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){

	echo $row['City'];
	echo "<br>";
	
}



?>

<a href="google.php?limit=<?php echo $limit; ?>&offset=<?php 
if($offset-$limit < 0){
	echo 0; 	
}
else{
	echo $offset-$limit; 
}
?>"> Föregående Sida</a>
<a href="google.php?limit=<?php echo $limit; ?>&offset=<?php echo $offset+$limit; ?>"> Nästa Sida</a>

