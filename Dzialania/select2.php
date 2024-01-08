<?php 
// Wyświetl w postaci tabeli HTML kolejno w kolumnach dane:
// imie, nazwisko, kod_zlecenia, wartosc_zlec
// Posortuj wg wartości zlecenia malejąco
// wykorzystaj złączenie tabel

   $connect = mysqli_connect('localhost','root','','naukad');
   $query = 'SELECT nazwaPliku, podpis FROM zdjecia';
   $result = mysqli_query($connect,$query);


   foreach($result as $wiersz){
      // sposób A
      echo '<img src="images/'.$wiersz['nazwaPliku'].'" alt="'.$wiersz['podpis'].'">';
      // sposób B - wybieracie jeden z nich nie obydwa na raz
      $src = $wiersz['nazwaPliku'];
      $alt = $wiersz['podpis'];
      echo "<img src='images/$src' alt='$alt'>";
   }

   mysqli_close($connect);

?>
