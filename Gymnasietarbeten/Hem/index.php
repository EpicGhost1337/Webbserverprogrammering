<?php
 include("../Templets/Navigation.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../Js/Script.js"></script>
    <link rel="stylesheet" href="../CSS/Home.css">
    <meta charset="UTF-8">
    <title>Hem</title>
</head>

<body>
    <!-- main - section -->
    <section id="main">
        <div id="bildspel">
            <div>
                <img src="../Img/15W6mpv.jpg" width="1200" height="450" class="bildgalleri">
            </div>
            <div class="current">
                <img src="../Img/AZM8esP.jpg" width="1200" height="450" class="bildgalleri">
            </div>
            <div>
                <img src="../Img/ECh7X3z.jpg" width="1200" height="450" class="bildgalleri">
            </div>
            <div>
                <img src="../Img/igDwRp5.jpg" width="1200" height="450" class="bildgalleri">
            </div>
        </div>
        <!-- Section -->
        <section id="Home_Box">
            <h1>Vi erbjuder</h1>
        </section>

        <!-- bilder -->
        <img id="Home_Img" src="../Img/Frakt.png" witdth="300px" height="300px">
        <img id="Home_Img2" src="../Img/Support.png" witdth="300px" height="300px">
        <img id="Home_Img3" src="../Img/Trygg.png" witdth="300px" height="300px">

        <!-- Textruta -->
        <div id="Home_txt">
             <h1>Fri Frakt</h1>
             <p></p>
        </div>
        <div id="Home_txt2">
            <h1>Supporte 24/7</h1>
        </div>
        <div id="Home_txt3">
            <h1>Trygg E-handel</h1>
        </div>
    </section>
    <?php
 include("../Templets/Footer.php");
?>
</body>

</html>
