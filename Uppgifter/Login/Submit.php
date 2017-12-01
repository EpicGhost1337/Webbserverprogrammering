<?php

$dbc = mysqli_connect("localhost","root","","register");

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = "Select*From registera where Username = $Username AND Password = $Password;";

mysqli_query($dbc,$query);


?>