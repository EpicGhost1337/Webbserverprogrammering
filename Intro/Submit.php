<?php
$dbc = mysqli_connect("localhost","root","","register");

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email = $_POST['Email'];
 
$Year = $_POST['Year'];
$Month = $_POST['Month'];
$Day = $_POST['Day'];

$query = 'Insert into Registera(Username, Password, Firstname, Lastname, Email , Year, Month, Day) values ("'.$Username.'", "'.$Password.'", "'.$Firstname.'", "'.$Lastname.'", "'.$Email.'",  "'.$Year.'","'.$Month.'", "'.$Day.'")';


mysqli_query($dbc,$query);

echo $query;




?>