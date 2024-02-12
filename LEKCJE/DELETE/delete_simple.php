<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Delete simple</title>
</head>
<body>
   <div id="glowny">
      <h2>Kasowanie ucznia po ID</h2>
      <form method="POST" action="">
         Podaj ID ucznia:<input type="number" name="iducznia"><br>
         <input type="submit" name="delete" value="USUŃ">
      </form>
   </div>
</body>
</html>
<?php 
// Kasowanie rekordu w tabeli dla okreslonego id ucznia

   if (isset($_POST["delete"])) {
      $iducznia = $_POST["iducznia"];
      $connect = mysqli_connect('localhost','root','','baseandphp');
      $query = "DELETE FROM uczniowie WHERE id=$iducznia";
      $result = mysqli_query($connect,$query);
      mysqli_close($connect);
   }
?>