<?php 

   $nrZespolu = $_POST['nrZespolu'];
   $nrDyspozytora = $_POST['nrDyspozytora'];
   $adres = $_POST['adres'];
   $data = date('hh:mm:ss');

   $con = mysqli_connect("localhost","root","","ratownictwo");
   $query = "INSERT INTO zgloszenia (ratownicy_id, dyspozytorzy_id, adres, pilne, czas_zgloszenia) VALUES ($nrZespolu,$nrDyspozytora,'$adres',0, '$data')";
   mysqli_query($con,$query);
   mysqli_close($con);
?>