<!DOCTYPE html>
<html lang="pl">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>INSERT INTO</title>
</head>
<body>
   <form action="" method="post">
      Nazwisko: <input type="text" name="nazwisko"><br>
      Imię: <input type="text" name="imie"><br>
      Klasa: <input type="text" name="klasa"><br>
      Telefon: <input type="text" name="telefon"><br>
      Email: <input type="text" name="email"><br>
      <input type="submit" name="submit" value="Dodaj ucznia">
   </form>

<?php

   if (isset($_POST['submit'])) {
      $nazwisko = $_POST['nazwisko'];
      $imie = $_POST['imie'];
      $klasa = $_POST['klasa'];
      $telefon = $_POST['telefon'];
      $email = $_POST['email'];
   
      $con = mysqli_connect("localhost","root","","baseandphp");
      $query = "INSERT INTO uczniowie (nazwisko,imie,klasa_id,telefon_komorkowy,email) 
               VALUES ('$nazwisko', '$imie', $klasa, '$telefon', '$email')";
      $result = mysqli_query($con, $query);
      mysqli_close($con);
   }

?>  
</body>
</html>
