<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <?php
      $con = mysqli_connect("localhost", "root", "", "baseandphp");
      $query = "SELECT * FROM uczniowie";
      $result = mysqli_query($con, $query);

      echo '<table>';
      echo '<tr>';
      echo '<th>Nazwisko</th>';
      echo '<th>Imię</th>';
      echo '<th>Klasa</th>';
      echo '<th>Telefon</th>';
      echo '<th>Email</th>';
      echo '<th>Operation</th>';
      echo '</tr>';
      foreach ($result as $row) {
         echo '<tr>';
         echo '<td>' . $row['nazwisko'] . '</td>';
         echo '<td>' . $row['imie'] . '</td>';
         echo '<td>' . $row['klasa_id'] . '</td>';
         echo '<td>' . $row['telefon_komorkowy'] . '</td>';
         echo '<td>' . $row['email'] . '</td>';
         echo '<td>
         <a href="update_extend.php?iduser=' . $row['id'] . '">EDIT<a/> 
         <a href="update_extend.php?iddel=' . $row['id'] . '">USUŃ<a/>
         </td>';
         echo '</tr>';
      }
      echo '</table>';

      mysqli_close($con);

   ?>
   <hr>
   <?php
      if (isset($_GET['iduser'])) {
         $con = mysqli_connect("localhost", "root", "", "baseandphp");
         $query = "SELECT * FROM uczniowie WHERE id=".$_GET['iduser'];
         $result = mysqli_query($con, $query);
         $row = mysqli_fetch_assoc($result);
         echo '<form action="" method="POST">';
         echo 'Nazwisko: <input type="text" name="nazwisko" value="'.$row['nazwisko'].'"><br>';
         echo 'Imię: <input type="text" name="imie" value="'.$row['imie'].'"><br>';
         echo 'Klasa ID: <input type="number" name="klasa_id" value="'.$row['klasa_id'].'"><br>';
         echo 'Telefon komórkowy: <input type="text" name="telefon_komorkowy" value="'.$row['telefon_komorkowy'].'"><br>';
         echo 'Email: <input type="text" name="email" value="'.$row['email'].'"><br>';
         echo '<input type="submit" name="wyslij" value="Aktualizuj">';
         echo '</form>';
         mysqli_close($con);
      }

      if (isset($_POST['wyslij'])) {
         $con = mysqli_connect("localhost", "root", "", "baseandphp");
         $nazwisko = $_POST['nazwisko'];
         $imie = $_POST['imie'];
         $klasa_id = $_POST['klasa_id'];
         $telefon = $_POST['telefon_komorkowy'];
         $email = $_POST['email'];
         $query = "UPDATE uczniowie SET nazwisko='$nazwisko', imie='$imie', klasa_id=$klasa_id, telefon_komorkowy='$telefon', email='$email' WHERE id=".$_GET['iduser'];
         $result = mysqli_query($con, $query);
         mysqli_close($con);
         header('location:update_extend.php');
      }
      if (isset($_GET["iddel"])) {
         $iducznia = $_GET["iddel"];
         $connect = mysqli_connect('localhost','root','','baseandphp');
         $query = "DELETE FROM uczniowie WHERE id=$iducznia";
         $result = mysqli_query($connect,$query);
         mysqli_close($connect);
         header('location:update_extend.php');
      }
      ?>
</body>
</html>

