<?php 
// Napisz skrypt, który wykona połączenie z bazą danych XXX

// Zapytania przykłady:
// SELECT miesiac,rok FROM zadania WHERE miesiac='sierpien'

// Przykłady wyświetlenia danych:
// Wyświetl w postaci list np. nazwiska albo np. miesiąc lub datę itp.
// w postaci tabeli HTML
// w postaci akapitów gdzie miesiąc jest hiperłączem
// zwykłe wiersze zakończone enterem HTML


// Kroki:
// 1. Połączenie z serwerem baz i bazą za pomocą danego konta
// 2. Utworzenie zapytania
// 3. Na połączeniu wykonaj zapytanie 
// 4. Wyświetlenie danych
// 5. Zakończenie połączenia z serwerem baz


// baza: sprawdzian
// tabela: zadania
// pola tabeli: 
// id 	dataZadania 	wpis 	miesiac 	rok 	
// (int) (date)        (text) (text) (int)


// Wyświetl w postaci akapitów niepuste wpisy oraz daty tych wpisów
// np Wpis, data


$connect = mysqli_connect("localhost","root","","sprawdzian");
$query = "SELECT wpis,dataZadania FROM zadania WHERE wpis IS NOT NULL";
$result = mysqli_query($connect, $query);

foreach ($result as $row) {
   echo '<p>'.$row['wpis'].', <a href="#">'.$row['dataZadania'].'</a></p>';
}

mysqli_close($connect);










// tabela
// Wyświetl w tabeli wpisy, daty tych wpisów oraz miesiąc

$connect = mysqli_connect("localhost","root","","sprawdzian");
$query = "SELECT wpis,dataZadania,miesiac FROM zadania";
$result = mysqli_query($connect, $query);

echo '<table border="1">';
echo '<tr>';
echo '<th>Wpis</th>';
echo '<th>Data zadania</th>';
echo '<th>Miesiąc</th>';
echo '</tr>';
foreach ($result as $row) {
   echo '<tr>';
   echo '<td>'.$row['wpis'].'</td>';
   echo '<td>'.$row['dataZadania'].'</td>';
   echo '<td>'.$row['miesiac'].'</td>';
   echo '</tr>';
}
echo '</table>';
mysqli_close($connect);











// lista
// Wyświetl w tabeli wpisy, daty tych wpisów oraz miesiąc

$connect = mysqli_connect("localhost","root","","sprawdzian");
$query = "SELECT wpis,dataZadania,miesiac FROM zadania";
$result = mysqli_query($connect, $query);

echo '<ol>';
foreach ($result as $row) {
   echo '<li>'.$row['wpis'].', '.$row['dataZadania'].'</li>';
}
echo '</ol>';
mysqli_close($connect);

?>