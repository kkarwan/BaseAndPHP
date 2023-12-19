<?php

// Sposób proceduralny - połączenie z bazą

$con = mysqli_connect("localhost", "root", "", "naukad");
$query = "SELECT * FROM nazwiska";
$result = mysqli_query($con,$query);

// Pokazania zawartości tabeli nazwiska z bazy naukad
// dla wybranych pól za pomocą foreach

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

// Pokazania zawartości tabeli nazwiska z bazy naukad
// dla wybranych pól za pomocą while

// while

$result = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($result)) {
   echo '<p>';
   echo $row['stanowisko'];
   echo ' : ';
   echo $row['pensja'];
   echo 'zł</p>';
}

mysqli_close($con);

?>