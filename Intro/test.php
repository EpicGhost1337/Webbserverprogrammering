<?php

// Skapa en länk till databasen
require("../../db_connections/connect_db_lab2.php") // (Adress , Användarnamn , Lösenord , Databas)

// Formulera en fråga
$query = "UPDATE Cities SET AccentCity = 'São Paulo' WHERE City= 'Sao Paulo'";

// Ställ frågan till databasen 
mysqli_query($dbc,$query);

// Formulera en till fråga
$query = "SELECT * FROM Cities;";

// Ställ frågan till databasen och spara resultatet
$result = mysqli_query($dbc,$query);

// Skapa ett table i HTML
echo "<table>";


// Så länge vi kan hämta en ny rad från vårt resultat:
while($row = mysqli_fetch_array($result)){

	// Skriv ut informationen på kolumnen City och Population från databasen
	echo "<tr>";
	
		echo "<td>";
		echo $row['City'];
		echo "</td>";
		
		echo "<td>";
		echo $row['Population'];
		echo "</td>";
	
	echo "<tr>";
	
}

// Avsluta table
echo "</table>";
?>