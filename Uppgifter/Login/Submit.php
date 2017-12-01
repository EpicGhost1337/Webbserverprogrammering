<?php

$dbc = mysqli_connect("localhost","root","","register");

$Username = $_POST['Username'];
$Password = $_POST['Password'];


$query = "Select*from register where Username = $Username, Password = $Password;"
    
    mysqli_query($dbc,$query);
    echo $dbc;
    
  
?>