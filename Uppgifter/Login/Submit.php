<?php

$dbc = mysqli_connect("localhost","root","","register");

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = "Select * From registera where Username = '$Username' AND Password = '$Password';";

mysqli_query($dbc,$query);

$result = mysqli_query($dbc,$query);

    if($row = mysqli_fetch_array($result)) {
        
        echo "Successfully logged in!";
        
    }
    else {
        
        echo "Login failed, try again!";
        
    }
  
?>