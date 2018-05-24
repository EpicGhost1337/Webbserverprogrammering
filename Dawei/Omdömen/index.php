<?php
include("../Templets/navigation.php");
?>
 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Omdömen</title>
</head>
<body>
     <div id="Omdömen_form_container">
     
   <?php
    
    $dbc = mysqli_connect("localhost","root","","dawei");
    if(isset($_POST['Användare']) && isset($_POST['Kommentar']) && isset($_POST['Sjärna'])){
       
        $User = $_POST['Användare'];
        $Comment = $_POST['Kommentar'];
        $stars = $_POST['Sjärna'];
        
        $query = "INSERT INTO Omdomen (Omdomen_User,Omdomen_Comment,Omdomen_stars) VALUES ('$User','$Comment','$stars');";
        if(mysqli_query($dbc,$query)){
            
            ?>
            <p id="Send">Tack din recension har skickat!</p>
            <?php
        }
        else{
            ?>
            <p id="Send">Ett fel inträffade med din recension!</p>
            <?php 
        }
    }
         else{
             
?>
   
    
     <form id="Omdomen" method="POST">
       Ditt namn <input type="text" name="Användare"/><br>
        Recension <input type="text" name="Kommentar"/><br>
         Betyg <input id="slider" type="range" min="1" max="5" step="1"  name="Sjärna"/><span id="value">3</span>/5<br>
           <input type="submit" value="Skicka"/>
      </form>
     
      <script>
       var slider = document.getElementById("slider");
       slider.oninput = function (){
       document.getElementById("value").innerHTML = slider.value;
       };
     </script>
     <?php
             }
             ?>
     <div id="container">
      <p id="Lista"> Våra senaste recensioner just nu</p>
<?php
           
    $query = "SELECT * FROM Omdomen ORDER BY Omdomen_id DESC LIMIT 10;";
    $result = mysqli_query($dbc,$query);
    while($row = mysqli_fetch_array($result)){   
        echo '<div class="content">';
        echo $row['Omdomen_User'] .  " tycker:<br>";
        echo $row['Omdomen_Comment'] . "<br>";
        echo '<div class="stars">';
        $stars = $row['Omdomen_stars'];	
        for($i = 0 ; $i < $stars ; $i++){
            
?>
            <img width="25px" height="25px" src="../imgs/1495916688christmas-tree-star-png-image-gallery-11.png" />
        
    <?php 
             } 
             echo "</div>";
             echo "</div>";
        
     }   
        
?>
   </div>
   </div>
</body>
</html>