<?php

// Sposób proceduralny - połączenie z bazą

$con = mysqli_connect("localhost", "root", "", "naukad");
$query = "SELECT * FROM nazwiska";
$result = mysqli_query($con,$query);

// Kilka możliwości pokazania zawartości tabeli nazwiska z bazy naukad

// foreach

foreach ($result as $row) {
   echo '<p>';
   echo $row['imie'];
   echo ' ';
   echo $row['nazwisko'];
   echo ', ';
   echo '<a href="#">'.$row['miasto'].'</a>';
   echo '</p>';
}

mysqli_close($con);

?>