
<?php
$dbc = mysqli_connect("localhost","root","","register");
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email = $_POST['Email'];

$query = 'Insert into Kassa(Firstname, Lastname, Email) values ("'.$Username.'", "'.$Password.'", "'.$Firstname.'", "'.$Lastname.'", "'.$Email.'")';
mysqli_query($dbc,$query);
echo $query;
?>