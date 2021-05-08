<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kassa</title>
    <link rel="stylesheet" href="../CSS/Kassa.css">
</head>

<body>
    <?php
 include("../Templets/Navigation.php");
?>

    <section id="main">



        <div>
            <form method="post" action="Submit.php">
                <h3>Kassas</h3>
                <br>
                <br>
                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" placeholder="Email">
                <br>
                <br>
                <label for="Number">Mobilnummer:</label>
                <input type="text" id="Numer" name="Number" placeholder="Mobilnummer">
                <br>
                <br>
                <label for="Number">Personnummer:</label>
                <input type="text" id="ID" name="ID" placeholder="Mobilnummer">
                <br>
                <br>
                <label for="fname">Förnamn:</label>
                <input type="text" id="fname" name="Firstnamn" placeholder="Förnamn">
                <label for="lname">Efternamn:</label>
                <input type="text" id="lname" name="Lastname" placeholder="Efternamn">


                <input type="submit" value="Submit">
            </form>
        </div>

    </section>
    <?php
 include("../Templets/Footer.php");
?>
</body>

</html>
