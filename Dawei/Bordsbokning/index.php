<?php

include("../Templets/navigation.php");

$dbc = mysqli_connect("localhost","root","","dawei");

if(isset($_GET['book'])){
    
    $tables = explode("o",$_GET['book']);
    
    for($i = 0 ; $i < count($tables)  ; $i++){
        
        $bord_id = $tables[$i];
        
        $query = "SELECT * FROM BORD JOIN bokning ON bord.bord_id = bokning.bokning_bord where bord_id = $bord_id;";
        $result = mysqli_query($dbc,$query);
        if(!mysqli_fetch_array($result)){
            echo "BOKA " . $bord_id . "<br>";
            // SKAPA BOKNIG MED DATABASFRÅGA
        }
        else{
            echo "FULLT " . $bord_id . "<br>";
        }
        
        
        
    }
    
}


if(isset($_POST['name']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['personer']) && isset($_POST['extra'])){

   $Antal = $_POST['personer'];
   $query= "SELECT * FROM bord WHERE bord_platser > $Antal";
    
   $result = mysqli_query($dbc,$query);
    $Namn = $_POST['name'];
    $Tid = $_POST['time'];
    $Datum = $_POST['date'];
    $Extra = "";
    if(isset($_POST['extra'])){
       $extra=$_POST ['extra'];
    }
   $query = "INSERT INTO bokning (bokning_namn, boking_datum, bokning_tid, bokning_antal, bokning_extra)
   VALUES('$Namn','$Datum','$Tid','$Antal','$Extra');";
   $result = mysqli_query($dbc,$query);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bordsbokningn</title>
</head>
<body>
   
    <form id="Bord" method="post" action="">
       
       Namn:<input type="text" name="name"/><br>
       <br>
       Datum:<input type="date" name="date"/><br>
       <br>
       Tid:<input type="time" name="time"/><br>
       <br>
       Antal Personer:<input type="number" name="personer"/><br>
       <br>
       Extra:<input type="text" type="namn" name="extra"/><br>   
             <input type="submit"><br>
     </form>
</body>
</html>