<?php 
// Wyświetl w postaci tabeli HTML kolejno w kolumnach dane:
// imie, nazwisko, kod_zlecenia, wartosc_zlec
// Posortuj wg wartości zlecenia malejąco
// wykorzystaj złączenie tabel

   $connect = mysqli_connect('localhost','root','','naukad');
   $query = 'SELECT imie,nazwisko,kod_zlecenia,wartosc_zlec FROM zlecenia INNER JOIN nazwiska ON zlecenia.id_prac=nazwiska.id ORDER BY wartosc_zlec DESC';
   $result = mysqli_query($connect,$query);

   echo '<table border="1" cellpadding="5" rules="all">';
   echo '<tr>';
   echo '<th>Imię</th>';
   echo '<th>Nazwisko</th>';
   echo '<th>Kod zlecenia</th>';
   echo '<th>Wartość zlecenia</th>';
   echo '</tr>';
   foreach($result as $wiersz){
      echo '<tr>';
      echo '<td>'.$wiersz['imie'].'</td>';
      echo '<td>'.$wiersz['nazwisko'].'</td>';
      echo '<td>'.$wiersz['kod_zlecenia'].'</td>';
      echo '<td>'.$wiersz['wartosc_zlec'].' zł</td>';
      echo '</tr>';
   }
   echo '</table>';

   mysqli_close($connect);

?>
