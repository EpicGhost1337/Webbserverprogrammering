<form method = "post" action = "Submit.php">
<form>
<h3> Registera här  </h3>
Användanamn:
<input type="text" name="Username" />
Lösenord:
<input type="text" name="Password" />
</br>
</br>
Förnamn:
<input type="text" name="Firstname">
Efternamn:
<input type="text" name="Lastname">
</br>
</br>
Email:
<input type="Email" name="Email">


Födelsedatum:
<select name ="Year">
<?php
for($i = 1999 ; $i >= 1900 ; $i--){
	echo "<option value = '$i'>$i</option>";
}
?></select>

<select name ="Month">
<option value ="01">jan</option>
<option value ="02">Feb</option>
<option value ="03">Mar</option>
<option value ="04">Apr</option>
<option value ="05">May</option>
<option value ="06">Jun</option>
<option value ="07">Jul</option>
<option value ="08">Aug</option>
<option value ="09">Sep</option>
<option value ="10">Oct</option>
<option value ="11">Nov</option>
<option value ="12">Dec</option>
</select>

<select name ="Day"><?php
for($i = 1 ; $i <= 31 ; $i++){
	echo "<option value = '$i'>$i</option>";
}
?></select>
<input type="submit" value="Skicka">




</form>