
<form method="GET" action="googel.php">

<select type="limit">
<option value="10"> 10 </option>
<option value="20"> 10 </option>
<option value="30"> 10 </option>
<option value="40"> 10 </option>
<option value="50"> 10 </option>
</select>

<input type="submit"/>


</form>

<?php
if(issert($_GET['offset'])){
	$limit =$_GET
}
$offset = $_GET['offset'];

$_GET['namn'];
echo "<br>"

$dbc = mysqli_connect("localhost","root","","lab2");

$query = "SELECT*FROM cities LIMIT 10 OFFSET 36;";
$result= mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($result)){
	       
	echo $row['City'];
	echo "<br>";	
}

?>
<a href "googel.php?offset=10"<?php echo $offset-10;?>"> Föregående sida</a>
<a href "googel.php?offset=10"<?php echo $offset+10;?>"> Nästa sida </a>