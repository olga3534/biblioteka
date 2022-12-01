
<?php
$mysqliConnection = mysqli_connect("localhost", "biblioteka", "olga123","biblioteka");


if(!$mysqliConnection){
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd"


        . mysqli_connect_error());
}

echo "Połączono z bazą danych.";
?>

