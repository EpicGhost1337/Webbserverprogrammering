<!doctype html>

<html>

    <head>
    
    </head>

    <body>
        <h2> Alert </h2>
        <button onclick="Knapp()"> Tryck </button>
    
         <script> function Knapp(){
                 alert("Tryck inte");
             }
         </script>
    
        <h2> Större bild</h2>
           <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="3.png" alt="think" width="32" height="32">
            
            <script>
             function bigImg(x) {
             x.style.height = "125px";
             x.style.width = "125px";
             }

              function normalImg(x) {
              x.style.height = "32px";
              x.style.width = "32px";
              }
            </script>
        
       <h2> Uppgift 3</h2>
        <button onclick="myFunction()"> Tryck </button>
        <img id="Bild" src="3.png">
        
         <script>
             
          function myFunction() {
          var x = document.getElementById("Bild");
          if (x.style.display === "none") {
          x.style.display = "block";
          } else {
          x.style.display = "none";
          }
          }
          </script>
             
    </body>



</html>