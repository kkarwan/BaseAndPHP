<!DOCTYPE html>
<html lang="pl">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sierpniowy kalendarz</title>
   <link rel="stylesheet" href="styl5.css" type="text/css">
</head>
<body>
   <div id="baner1">
      <h1>Organizer: SIERPIEŃ</h1>
   </div>
   <div id="baner2">
      <form action="" method="POST">
         Zapisz wydarzenie: <input type="text" name="wydarzenie">
         <input type="submit" name="wyslij" value="OK">
      </form>
   </div>
   <div id="baner3">
      <img src="logo2.png" alt="sierpień">
   </div>
   <div id="glowny">
      <?php 
         $con = mysqli_connect("localhost","root","","kalendarz");
         $query1 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac='sierpien'";
         $result1 = mysqli_query($con,$query1);

         foreach($result1 as $row){
            echo '<div class="kalendarz">';
            echo '<h5>'.$row['dataZadania'].'</h5>';
            echo '<p>'.$row['wpis'].'</p>';
            echo '</div>';
         }
         if (isset($_POST['wyslij'])) {
            $wydarzenie = $_POST['wydarzenie'];
            $query4 = "UPDATE zadania SET wpis='$wydarzenie' WHERE dataZadania='2020-08-09'";
            $result4 = mysqli_query($con,$query4);
            header('location:organizer.php');
         }
         mysqli_close($con);
         


      ?>
   </div>
   <div id="stopka">
      <p>Stronę wykonał: 07070712345</p>
   </div>
</body>
</html>