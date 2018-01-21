<!doctype html>

<html>

    <head>
        <style>
            #FargBox{
                width: 50px;
                height: 50px;
                background-color: blue;
                border: 1px solid black;
            }
        </style>
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
        
        <h2> Uppgift 3 </h2>
         <button onclick="myFunction()"> Tryck </button>
          <img id="bild" src="3.png">
        
            <script>
              function myFunction() {
              var x = document.getElementById("bild");
              if (x.style.display === "none") {
              x.style.display = "block";
              } else {
              x.style.display = "none";
              }
              }   
            </script>
        
        <h2> Uppgift 4</h2>
        <button type="button" onclick="Färg()"> Ändra Bakgrundsfärg</button>
         
          <script>
           function Färg() {
           document.body.style.backgroundColor = "lightblue";
           }
          </script>
        
        <h2> Uppgift 5</h2>
         <button onclick="Clear()"> Rensa</button>
        
          <script>
           function Clear(){
               document.body.innerHTML = "Hej Baok!";
           }
          </script>
        
        <h2> Uppgift 6</h2>
         <div id="FargBox" onmousedown="Box()"></div>
          
        <script>
            function Box(){
                var x = document.getElementById("FargBox");
                if(x.style.backgroundColor == "" || x.style.backgroundColor == "blue" ){
                     x.style.backgroundColor = "yellow";
                }
                else if (x.style.backgroundColor == "yellow") {
					x.style.backgroundColor = "green";
                    
				} 
                else if (x.style.backgroundColor == "green") {
					x.style.backgroundColor = "blue";
				}
            }
        
        </script>
            
        <h2> Uppgift 7</h2>
         <div id="counter">
				<p id="number">0</p>
				<button onmousedown="increase(1)">1</button>
				<button onmousedown="increase(10)">10</button>
				<button onmousedown="increase(100)">100</button>
				<button onmousedown="resetcounter()">Nollställt</button>
			</div>
             
        <script>
            var count = 0;
            function increase(x) {
                counter += x;
				document.getElementById("number").innerHTML = counter;
			}

			function resetcounter() {
				counter = 0;
				document.getElementById("number").innerHTML = counter;
			}
        
        </script>
        
           
    </body>



</html>