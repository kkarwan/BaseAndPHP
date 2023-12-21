<?php

// Sposób obiektowy mysqli - połączenie z bazą

// połączenie obiektowe
$con = new mysqli("localhost", "root", "", "naukad");
$query = "SELECT * FROM nazwiska";
// wywołanie metody query na połączeniu (obiekcie) $con i zapytaniu $query
$result = $con->query($query);

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
echo '<hr>';
// while
// wywołanie metody query na obiekcie $con
$result = $con->query($query);
//wywołanie metody fetch_assoc na rezultacie wykonania zapytania
while($row = $result->fetch_assoc()) {
   echo '<p>';
   echo $row['imie'];
   echo ' ';
   echo $row['nazwisko'];
   echo ', ';
   echo '<a href="#">'.$row['miasto'].'</a>';
   echo '</p>';
}

$con->close();

?>